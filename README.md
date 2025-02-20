First Launch a Instance in AWS EC2. with AMI Amazon linux.

Befor Login the server using ssh cp yoga website zip folder to server using scp command (eg: scp -i -key-pair-of-your-server zip-folder-path-from-laptop ec2-user@public-ip-of-your-server:.).

Login to server using ssh command in powershell.

Dounload the software on server (nginx (Web Server), php, php-fpm8.3( For .php execution), mariadb105-server(For Database) (eg: sudo yum install software-name -y)


Then Start software which is installed using command (sudo service start nginx php-fpm mariadb)

Then Unzip the folder (eg: unzip folder-name).

Move the folder to html folder (Path is /usr/share/nginx/html) (eg: mv folder-name /usr/share/nginx/html).

Verify it copy your publicIP and paste it on browser (your publicip/index.php) (Website is working).

Now attach Database to record data.

Create database go AWS Console serach RDS create database (give name, Set DB name as root, set password for DB, Attach to EC2 which is in use).

Copy the endpoint of your created database.

Open linux powershell create database command to open database ( eg: sudo mysql -u -p root -h  paste-created-database-endpoint-here ) enter password 

Succefully login to database:

Create Database (eg: create database dbconnect; )

use dbconnect;

create table in dbconnect (

table1: create table users(id int primary key auto_increment, username varchar(100), email varchar(100), number int, gender varchar(100));

table2: create table contact(id int primary key auto_increment, username varchar(100), email varchar(100), number int, message varchar(100));
)

Then verify it using desc users; and desc contact;

Then exit from database using exit command.

Then open file dbconnect using sudo nano dbconnect ( edit here in server block paste your DB endpoint, usersname is same root, password enter your database password, and keep other as it is).

Then restart all services ( sudo service nginx restart php php-fpm mariadb)

Your Website is ready to use and also can record users data in databses.
