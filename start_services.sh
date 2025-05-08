#!/bin/bash

# Script to start the Movable-WebApp services (Python service and Symfony server)
# Created: May 2025
# Modified for Movable-WebApp project

PROJECT_ROOT="/home/fsociety/Downloads/FINALVERSIONSYMFONY/Movable-WebApp-hanipushit"
PYTHON_SERVICE_DIR="$PROJECT_ROOT/python_service"
LOGS_DIR="$PROJECT_ROOT/logs"

# Create logs directory if it doesn't exist
mkdir -p "$LOGS_DIR"

echo "===== MOVABLE-WEBAPP SERVICES STARTUP SCRIPT ====="
echo "Starting services from $PROJECT_ROOT"

# Function to check if a process is running on a specific port
check_port_in_use() {
    if lsof -i:"$1" > /dev/null 2>&1; then
        return 0  # Port is in use
    else
        return 1  # Port is not in use
    fi
}

# Check if Python service is already running
if check_port_in_use 5000; then
    echo "WARNING: Something is already running on port 5000. Python service may already be running."
    echo "If you want to restart it, stop the existing process first."
else
    echo "Starting Python service..."
    # Start Python service in a new terminal
    gnome-terminal --title="Movable-WebApp Python Service" -- bash -c "cd '$PYTHON_SERVICE_DIR' && source venv/bin/activate && echo 'Starting Python service...' && python main.py 2>&1 | tee '$LOGS_DIR/python_service.log'; echo 'Press Enter to close this window'; read"
    
    # Wait for Python service to start
    echo "Waiting for Python service to start..."
    for i in {1..10}; do
        if check_port_in_use 5000; then
            echo "Python service started successfully on port 5000!"
            break
        fi
        if [ $i -eq 10 ]; then
            echo "ERROR: Python service failed to start within the expected time."
            echo "Please check the logs at $LOGS_DIR/python_service.log"
            exit 1
        fi
        sleep 1
        echo -n "."
    done
    echo ""
fi

# Clear Symfony cache
echo "Clearing Symfony cache..."
cd "$PROJECT_ROOT"
if ! bin/console cache:clear; then
    echo "WARNING: Error clearing Symfony cache. You may need to check permissions or dependencies."
fi

# Check if Symfony server is already running
if check_port_in_use 8000; then
    echo "WARNING: Something is already running on port 8000. Symfony server may already be running."
    echo "Attempting to stop Symfony server..."
    if ! symfony server:stop; then
        echo "ERROR: Failed to stop the existing Symfony server. Please check manually."
        exit 1
    fi
fi

# Start Symfony server in a new terminal
echo "Starting Symfony server..."
gnome-terminal --title="Movable-WebApp Symfony Server" -- bash -c "cd '$PROJECT_ROOT' && symfony server:start 2>&1 | tee '$LOGS_DIR/symfony_server.log'; echo 'Press Enter to close this window'; read"

# Wait for Symfony server to start
echo "Waiting for Symfony server to start..."
for i in {1..10}; do
    if check_port_in_use 8000; then
        echo "Symfony server started successfully on port 8000!"
        break
    fi
    if [ $i -eq 10 ]; then
        echo "ERROR: Symfony server failed to start within the expected time."
        echo "Please check the logs at $LOGS_DIR/symfony_server.log"
        exit 1
    fi
    sleep 1
    echo -n "."
done
echo ""

echo "===== STARTUP COMPLETE ====="
echo "Services should now be running:"
echo "- Python service: http://localhost:5000"
echo "- Symfony application: http://127.0.0.1:8000"
echo ""
echo "To view logs:"
echo "- Python service: $LOGS_DIR/python_service.log"
echo "- Symfony server: $LOGS_DIR/symfony_server.log"
echo ""
echo "To stop the services, you can run:"
echo "- For Symfony: symfony server:stop"
echo "- For Python: Find and kill the process manually with 'ps aux | grep python'"

