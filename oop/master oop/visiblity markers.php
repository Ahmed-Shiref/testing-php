<?php
/*
Public
it can be called in any scope. This means that a public property of an object can be both
retrieved and modified from anywhere in a program — in the class, a subclass, or from outside
of the class, for example. This level is the default behavior when visibility is not declared because
of backward-compatibility concerns with PHP4, which did not have visibility.

-Protected
Protected properties and methods can be accessed from inside the class they are declared, or in
any class that extends them. They can't be accessed from outside the class or subclass.

-Private
A private property or method can't be accessed by a subclass of the class it is defined in. If you
have a class with a protected property and a private property and then extend that class in the
subclass, you can access the protected property, but not the private property.
*/


class BankAccount
{
    // المتغيرات
    private $accountNumber;  // خاص ولا يمكن الوصول إليه خارج الكلاس
    protected $balance;      // محمي ويمكن الوصول إليه في الكلاس والكلاسات الموروثة
    public $owner;           // عام ويمكن الوصول إليه من أي مكان

    // Constructor لإنشاء حساب بنكي
    public function __construct($accountNumber, $owner, $initialBalance)
    {
        $this->accountNumber = $accountNumber;
        $this->owner = $owner;
        $this->balance = $initialBalance;
    }

    // دالة public للوصول إلى رقم الحساب الخاص
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // دالة public للوصول إلى الرصيد
    public function getBalance()
    {
        return $this->balance;
    }

    // دالة لإيداع الأموال
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // دالة لسحب الأموال
    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}

// إنشاء كائن من الكلاس
$account = new BankAccount("123456789", "John Doe", 500);

// الوصول إلى البيانات العامة
echo "Owner: " . $account->owner . "\n"; // يطبع: Owner: John Doe

// الوصول إلى المتغير الخاص عن طريق دالة public
echo "Account Number: " . $account->getAccountNumber() . "\n"; // يطبع: Account Number: 123456789

// الوصول إلى الرصيد عن طريق دالة public
echo "Balance: " . $account->getBalance() . "\n"; // يطبع: Balance: 500

// إيداع وسحب الأموال
$account->deposit(200);
$account->withdraw(100);

echo "Updated Balance: " . $account->getBalance() . "\n"; // يطبع: Updated Balance: 600