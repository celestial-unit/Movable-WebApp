// Search functionality
import 'bootstrap';
import './css/app.css';
document.getElementById('searchField').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    document.querySelectorAll('.reservation-item').forEach(item => {
        const text = item.textContent.toLowerCase();
        item.style.display = text.includes(searchTerm) ? 'block' : 'none';
    });
});

// Filter by transport
document.querySelectorAll('.filter-transport').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const transport = this.dataset.value;
        document.querySelectorAll('.reservation-item').forEach(item => {
            item.style.display = item.dataset.transport === transport ? 'block' : 'none';
        });
    });
});

// Clear filters
document.getElementById('clearFilter').addEventListener('click', function() {
    document.querySelectorAll('.reservation-item').forEach(item => {
        item.style.display = 'block';
    });
});

// Sort by date
document.getElementById('sortByDate').addEventListener('click', function() {
    const container = document.querySelector('.list-group');
    const items = Array.from(document.querySelectorAll('.reservation-item'));
    
    items.sort((a, b) => {
        const dateA = new Date(a.querySelector('small').textContent.trim());
        const dateB = new Date(b.querySelector('small').textContent.trim());
        return dateA - dateB;
    });
    
    items.forEach(item => container.appendChild(item));
});