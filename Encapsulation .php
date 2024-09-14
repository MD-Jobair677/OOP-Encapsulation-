<?php

class Employee {

    private  $name;
    private  $salary;

    public function __construct($name,$salary)
    {
      
        $this->setSalary($salary,$name);


        
    }
  //Public method to set the employee's salary securely
    public function setSalary($salary,$name) {
        if ($salary > 0) {
            $this->name = $name;
            $this->salary = $salary;
           
        } else {
            echo "Invalid salary amount.\n";
        }

    }

    public function getSalary() {
        return $this->salary;
    }


    public function getName() {
        return $this->name;
    }


    


}



$employee = new Employee("jobair", 5000);

echo "Employee Name: " . $employee->getName(). "\n";
echo "Employee Salary: $" . $employee->getSalary();






?>