<?php

namespace Imlera\Todo\Entities;

/**
 * EO_Task
 *
 * ORM model for working with tasks.
 *
 * Table properties:
 * @property-read int $ID Task identifier (primary key)
 * @property string $NAME Task name (required)
 * @property int $PRIORITY Task priority (default is 1; range: 0–6)
 * @property string|null $DESC Task description
 * @property string $STATUS Task status (default is 'pending')
 * @property DateTime $CREATE_AT Task creation date
 * @property bool $IS_ARCHIVED Indicates if the task is archived (default is false)
 * @property int $EMPLOYEE_ID Related employee ID (foreign key)
 * @property-read EO_Employee|null $EMPLOYEE Linked employee object
 *
 * Object methods:
 * @method int getId() Get the task's ID
 * @method EO_Task setId(int|numeric $id) Set the task's ID
 * @method string getName() Get the task's name
 * @method EO_Task setName(string $name) Set the task's name
 * @method int getPriority() Get the task's priority
 * @method EO_Task setPriority(int $priority) Set the task's priority
 * @method string|null getDesc() Get the task's description
 * @method EO_Task setDesc(string|null $desc) Set the task's description
 * @method string getStatus() Get the task's status
 * @method EO_Task setStatus(string $status) Set the task's status
 * @method DateTime getCreateAt() Get the task creation date
 * @method EO_Task setCreateAt(DateTime $datetime) Set the task creation date
 * @method bool getIsArchived() Get the task's archive status
 * @method EO_Task setIsArchived(bool $isArchived) Set the task's archive status
 * @method int getEmployeeId() Get the related employee ID
 * @method EO_Task setEmployeeId(int $employeeId) Set the related employee ID
 * @method EO_Employee|null getEmployee() Get the linked employee object via relation
 *
 * Management methods:
 * @method bool isNameChanged() Check if the task's name has been changed
 * @method bool isPriorityChanged() Check if the task's priority has been changed
 * @method bool isStatusChanged() Check if the task's status has been changed
 * @method bool isDescChanged() Check if the task's desc has been changed
 * @method bool isEmployeeIdChanged() Check if the task's employee ID has been changed
 * @method bool isIsArchivedChanged() Check if the task's archive status has been changed
 * @method EO_Task save() Save the object's changes to the database
 * @method EO_Task delete() Delete the object from the database
 *
 * Static methods:
 * @method static EO_Task createObject() Create a new task object
 * @method static EO_Task_Collection createCollection() Create a collection of tasks
 * @method static EO_Task getByPrimary($primary, array $parameters = []) Get a task by the primary key
 * @method static EO_Task|null getById($id) Get a task by ID
 * @method static EO_Task fetchObject() Fetch one object from the query result
 * @method static EO_Task_Collection fetchCollection() Fetch a collection of objects from the query result
 */
class TaskEntity extends \Imlera\Tables\EO_Task
{

}