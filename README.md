# LevelUp
Skill swap social application


## Getting Started

Built with Laravel which requires the following
- PHP 5.6 or higher (installing on windows requires editing the php.ini file)
- Composer  
- Vagrant  
- VirtualBox (or other VM software)
- ssh keys must be set up as configured in Homestead.yaml

(I'm also using ConEmu as a commmand line shell in Windows 8)

after pulling the code I had to run the following  
composer install
vendor\bin\homestead make

vagrant up to start the server, then ssh into the server and run the following

php artisan migrate

** I also had a problem with composer and php working with PHP 5 on Windows 10.  It worked after upgrading to PHP7...
** Windows 10 seems to have some bug with downloading files using vagrant