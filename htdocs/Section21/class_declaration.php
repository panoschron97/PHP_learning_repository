<?php

class example
{

protected String $firstname;
protected String $lastname;
protected int $age;
protected float $salary;


public function __construct(String $firstname = "UnknownFirstName",String $lastname = "UnknownLastName", int $age = 18, float $salary = 0.0)
{
$this->firstname = $firstname;
$this->lastname = $lastname;
$this->age = $age;
$this->salary = $salary;
} 

private function get_net_salary()
{
    return $this->salary - ($this->salary * (6/100));
}

public function set_net_salary()
{
    $this->salary = $this->get_net_salary();

    if($this->salary < 0)
    {
        $this->salary = 0;
    }
    else
    {
        $this->salary = $this->get_net_salary();
    }
}

public function create_object()
{
    echo "<br>Created an object!";
}

public function __toString()
{
    return "<br>Firstname : {$this->firstname}<br>Lastname : {$this->lastname}<br>Age : {$this->age}<br>Salary : {$this->salary}";
}

}

class example1 extends example
{
    private String $country;
    private String $town;
    private String $phone;
    public static $usercount = 0;
    public $usercount1 = 0;

    public function __construct(String $firstname, String $lastname, int $age, float $salary, String $country, String $town, String $phone)
    {
        self::$usercount++;
        $this->usercount1++;
        parent::__construct($firstname, $lastname, $age, $salary);
        $this->country = $country;
        $this->town = $town;
        if(strlen($phone) == 10)
        {
        $this->phone = $phone;
        }
        else
        {
        $this->phone = "invalid";
        }
    }

    public static function get_user_count()
    {
        echo "<br><br>Total users : " . self::$usercount;
    }

    public function get_user_count1()
    {
        echo "<br><br>Total users : " . $this->usercount1;
    }

public function __toString()
{
    return parent::__toString() . "<br>Country : {$this->country}<br>Town : {$this->town}<br>Phone : {$this->phone}";
}

}

?>