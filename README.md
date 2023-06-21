This is a simple CRUD RESTful API for task management.
The entrypoint of the application (/) is a page where all tasks are listed. There is an opportunity to filter the tasks by status and username.
New Task can be created on (/task/add) url by clicking the Create new task button on the top of the page. There are such fields like 'title', 'description' to be filled, username and status of the task(New, In progress, Review or Completed) should be selected from the dropdown. If no status is choosen it will be marked as "New" by default. The date of create and update will be added automatically.
You can receive more info about the task by clicking the Details button, which leads to (/task/{id}) url.
Editing of the task is available on (/task/edit/{id}) url by clicking the Edit button.
Click on the Delete button deletes the given task.

Similarly to the Tasks CRUD it is also possible to register a new user on (/user/register) url. The information about user contains name, email, password, role(User, Moderator or Admin).
The list of all registerd users is available on (/users) url, by clicking the Check all users button on the top left corner of the page.
The user's info is available by clicking the Details button, which follows to the (/user/register) url.
You can edit the user's info by following (/user/edit/{id}) url , button Edit.
You can delete the user from database by clicking the Delete button.

Steps to open the project:
1. Create a DB for the project
2. Clone the project from a repository
3. Set Database config in the .env file
4. Run 'composer install' to install the dependencies 
5. Execute 'php artisan migrate --seed' to run the migrations to the DB and fill it with fake data.
6. Open the application in the browser with the help of your local server

