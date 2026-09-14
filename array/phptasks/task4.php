<?php



$accountHolder = "Shalu";
$accountNumber = "AC1001";
$accountType = "Savings";
$balance = 25000;


function deposit(&$balance, $amount)
{
    $balance = $balance + $amount;

    return $balance;
}


function withdraw(&$balance, $amount)
{
    if ($amount <= $balance) {

        $balance = $balance - $amount;

        return "Withdrawal Successful";

    } else {

        return "Insufficient Balance";
    }
}


function checkBalance($balance)
{
    return $balance;
}


function displayAccountInfo($name, $accountNumber, $accountType, $balance)
{
    echo "Account Holder: " . $name . "<br>";
    echo "Account Number: " . $accountNumber . "<br>";
    echo "Account Type: " . $accountType . "<br>";
    echo "Balance: ₹" . $balance . "<br>";
}

$openingBalance = $balance;


$depositAmount = 5000;

deposit($balance, $depositAmount);

$balanceAfterDeposit = checkBalance($balance);


$withdrawAmount = 8000;

$transactionStatus = withdraw($balance, $withdrawAmount);

$finalBalance = checkBalance($balance);



echo "<h2>Mini Bank Account System</h2>";

echo "Account Holder: " . $accountHolder . "<br>";
echo "Account Number: " . $accountNumber . "<br>";
echo "Account Type: " . $accountType . "<br><br>";

echo "Opening Balance: ₹" . $openingBalance . "<br>";
echo "Deposit: ₹" . $depositAmount . "<br>";
echo "Balance After Deposit: ₹" . $balanceAfterDeposit . "<br>";
echo "Withdrawal: ₹" . $withdrawAmount . "<br>";
echo "Final Balance: ₹" . $finalBalance . "<br><br>";

echo "Transaction Status: " . $transactionStatus . "<br>";




$customers = [

    [
        "Name" => "Shalu",
        "AccountNumber" => "AC1001",
        "AccountType" => "Savings",
        "Balance" => 22000
    ],

    [
        "Name" => "Rahul",
        "AccountNumber" => "AC1002",
        "AccountType" => "Current",
        "Balance" => 45000
    ],

    [
        "Name" => "Anjali",
        "AccountNumber" => "AC1003",
        "AccountType" => "Savings",
        "Balance" => 32000
    ]

];



echo "<h2>All Bank Customers</h2>";

foreach ($customers as $customer) {

    echo "Name: " . $customer["Name"] . "<br>";
    echo "Account Number: " . $customer["AccountNumber"] . "<br>";
    echo "Account Type: " . $customer["AccountType"] . "<br>";
    echo "Balance: ₹" . $customer["Balance"] . "<br>";
}



$highestBalance = 0;
$highestCustomer = "";

foreach ($customers as $customer) {

    if ($customer["Balance"] > $highestBalance) {

        $highestBalance = $customer["Balance"];
        $highestCustomer = $customer["Name"];
    }
}
echo "<h2>Highest Balance Customer</h2>";

echo "Highest Balance Customer: " . $highestCustomer . "<br>";
echo "Highest Balance: ₹" . $highestBalance . "<br>";



echo "<h2>Final Account Information</h2>";

displayAccountInfo(
    $accountHolder,
    $accountNumber,
    $accountType,
    $finalBalance
);

?>
