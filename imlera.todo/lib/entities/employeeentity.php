<?php

namespace Imlera\Todo\Entities;

/**
 * EO_Employee
 *
 * ORM model for working with employees.
 *
 * Table properties:
 * @property-read int $ID Employee identifier (primary key)
 * @property string $NAME Full name of the employee
 * @property int $AGE Employee's age (minimum 14 years old)
 * @property string $GENDER Employee's gender (default is 'unknown')
 * @property DateTime $CREATE_AT Record creation date
 * @property-read string|null $LAST_NAME Last name (extracted from NAME)
 * @property-read string|null $FIRST_NAME First name (extracted from NAME)
 * @property-read EO_EmployeeProfile|null $PROFILE Employee profile (1:1 relation)
 *
 * Object methods:
 * @method int getId() Get the employee's ID
 * @method EO_Employee setId(int|numeric $id) Set the employee's ID
 * @method string getName() Get the employee's full name
 * @method EO_Employee setName(string $name) Set the employee's full name
 * @method int getAge() Get the employee's age
 * @method EO_Employee setAge(int $age) Set the employee's age
 * @method string getGender() Get the employee's gender
 * @method EO_Employee setGender(string $gender) Set the employee's gender
 * @method DateTime getCreateAt() Get the record creation date
 * @method EO_Employee setCreateAt(DateTime $datetime) Set the record creation date
 * @method string|null getLastName() Get the employee's last name (extracted from NAME)
 * @method string|null getFirstName() Get the employee's first name (extracted from NAME)
 * @method EO_EmployeeProfile|null getProfile() Get the employee's profile via relation
 *
 * Management methods:
 * @method bool isNameChanged() Check if the employee's full name has been changed
 * @method bool isAgeChanged() Check if the employee's age has been changed
 * @method bool isGenderChanged() Check if the employee's gender has been changed
 * @method EO_Employee save() Save the object's changes to the database
 * @method EO_Employee delete() Delete the object from the database
 *
 * Static methods:
 * @method static EO_Employee createObject() Create a new employee object
 * @method static EO_Employee_Collection createCollection() Create a collection of employees
 * @method static EO_Employee getByPrimary($primary, array $parameters = []) Get an employee by the primary key
 * @method static EO_Employee|null getById($id) Get an employee by ID
 * @method static EO_Employee fetchObject() Fetch one object from the query result
 * @method static EO_Employee_Collection fetchCollection() Fetch a collection of objects from the query result
 */
class EmployeeEntity extends \Imlera\Todo\Tables\EO_Employee
{

}