<?php

class BankAccount {
    // Private attributes: The attributes accountNumber and balance are declared as private, meaning they cannot be accessed directly from outside the BankAccount class.
    private $accountNumber;
    private $balance;

    // Constructor to initialize attributes: The constructor initializes the private attributes when a new BankAccount object is created.
    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Public method to deposit money: This method allows adding funds to the account and includes validation to ensure the deposit is positive.
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposited: $amount. New balance: {$this->balance}";
        } else {
            return "Deposit amount must be positive.";
        }
    }

    // Public method to withdraw money: This method allows withdrawing funds and checks that sufficient balance is available.
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew: $amount. New balance: {$this->balance}";
        } else {
            return "Insufficient funds or invalid amount.";
        }
    }

    // Public method to get the current balance: This method provides read access to the balance without allowing direct modification.
    public function getBalance() {
        return $this->balance;
    }
}

// Creating an object of the BankAccount class: An object of BankAccount is created with an initial balance.
$account = new BankAccount("123456789", 1000);

// Using public methods to interact with the private attributes: The public methods are used to deposit, withdraw, and check the balance, demonstrating controlled access to the private attributes.
echo $account->deposit(500);   // Outputs: Deposited: 500. New balance: 1500
echo "\n";
echo $account->withdraw(200);   // Outputs: Withdrew: 200. New balance: 1300
echo "\n";
echo $account->getBalance();     // Outputs: 1300

// Attempting to access private attributes directly will result in an error
// echo $account->balance; // This will cause an error

// Summary:
// Encapsulation helps protect an object's internal state by limiting access to its attributes and providing public methods for interaction.
// This approach promotes better data integrity and security, allowing you to control how data is modified and accessed.
