package Services;

import com.stripe.Stripe;
import com.stripe.exception.StripeException;
import com.stripe.model.Charge;
import com.stripe.param.ChargeCreateParams;

public class StripeServices {
    public StripeServices() {
        // Set your secret key here
        Stripe.apiKey = "sk_test_51QvgNPGMD19Kg6VCVL485yVimtdatsGmGxK9Irvo2lYHHHBQCi4JoVh2NQuz7osTIOJr1wJ8OYdDZbAEd7hYRfBI0066anPyYA"; // Replace with your Secret Key
    }


    public String createCharge(String token, int amount, String currency) throws StripeException {
        try {
            System.out.println("Creating charge with token: " + token);

            ChargeCreateParams params = ChargeCreateParams.builder()
                    .setAmount((long) amount)
                    .setCurrency(currency)
                    .setSource(token)
                    .build();

            Charge charge = Charge.create(params);
            System.out.println("Charge created successfully: " + charge.getId());
            return charge.getId();
        } catch (StripeException e) {
            System.err.println("Stripe error while creating charge: " + e.getMessage());
            throw e; // Re-throw the exception for handling in the controller
        }
    }
}