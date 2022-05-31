<?php

class User
{
    private string $name;
    private int $balance;

    public function __construct($user_name, $user_balance)
    {
        $this->name = $user_name;
        $this->balance = $user_balance;
    }

    public function printStatus()
    {
        echo 'Баланс состовляет ' . $this->balance . ' пользователя ' . $this->name;
        print "\n";

    }

    public function giveMoney($sum, $user)
    {
        if ($user->balance >= $sum) {
            $this->balance += $sum;
            $this->operationMoney($user, $sum);
            echo "Пользователь " . $user->name . " перечислил " . $sum . " пользователю " . $this->name . "\n";
        } else {
            echo "Пользователь " . $user->name . " не сможет перечислить " . $sum . " пользователю " . $this->name . "\n";
        }
    }

    private function operationMoney($user, $sum)
    {
        $user->balance -= $sum;
    }


}

$first_user = new User('Kate', 1000);
$second_user = new User('Dima', 2000);


$first_user->printStatus();
$second_user->printStatus();
$second_user->giveMoney(200, $first_user);
$first_user->printStatus();
$second_user->printStatus();

echo "--------------------------------------\n";

$first_user->printStatus();
$second_user->printStatus();
$first_user->giveMoney(1200, $second_user);
$first_user->printStatus();
$second_user->printStatus();

