<?php

namespace Imlera\Todo\Entities;

/**
 * EO_EmployeeProfile
 *
 * ORM model for working with employee profiles.
 *
 * Table properties:
 * @property-read int $ID Profile identifier (primary key)
 * @property string|null $PHONE Employee's phone number
 * @property string $EMAIL Employee's email (unique, required)
 * @property string|null $ADDRESS Employee's address
 * @property int $EMPLOYEE_ID Related employee ID (foreign key)
 * @property-read EO_Employee|null $EMPLOYEE Linked employee object
 *
 * Object methods:
 * @method int getId() Get the profile's ID
 * @method EO_EmployeeProfile setId(int|numeric $id) Set the profile's ID
 * @method string|null getPhone() Get the employee's phone number
 * @method EO_EmployeeProfile setPhone(string|null $phone) Set the employee's phone number
 * @method string getEmail() Get the employee's email
 * @method EO_EmployeeProfile setEmail(string $email) Set the employee's email
 * @method string|null getAddress() Get the employee's address
 * @method EO_EmployeeProfile setAddress(string|null $address) Set the employee's address
 * @method int getEmployeeId() Get the related employee ID
 * @method EO_EmployeeProfile setEmployeeId(int $employeeId) Set the related employee ID
 * @method EO_Employee|null getEmployee() Get the linked employee object via relation
 *
 * Management methods:
 * @method bool isEmailChanged() Check if the email has been changed
 * @method bool isPhoneChanged() Check if the email has been changed
 * @method bool isAddressChanged() Check if the email has been changed
 * @method bool isEmployeeIdChanged() Check if the email has been changed
 * @method EO_EmployeeProfile save() Save the object's changes to the database
 * @method EO_EmployeeProfile delete() Delete the object from the database
 *
 * Static methods:
 * @method static EO_EmployeeProfile createObject() Create a new profile object
 * @method static EO_EmployeeProfile_Collection createCollection() Create a collection of profiles
 * @method static EO_EmployeeProfile getByPrimary($primary, array $parameters = []) Get a profile by the primary key
 * @method static EO_EmployeeProfile|null getById($id) Get a profile by ID
 * @method static EO_EmployeeProfile fetchObject() Fetch one object from the query result
 * @method static EO_EmployeeProfile_Collection fetchCollection() Fetch a collection of objects from the query result
 */
class ProfileEntity extends \Imlera\Todo\Tables\EO_Employee
{

}