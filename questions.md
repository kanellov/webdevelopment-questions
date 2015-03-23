
#Ερωτήσεις#

1. Πότε εμφανίζεται το παρακάτω php warning; Πώς μπορεί να αποφεχθεί;

        Warning: Cannot modify header information - headers already sent by (output started at ****) in *** on line ****

    > Απάντηση:

    > ---

    > ---

    > ---


2. Εντοπίστε το λάθος στην ακόλουθη κλάση.

        class TestClass
        {
            protected $variable;

            public function __construct($variable)
            {
                $this->variable = $variable;
            }

            public static function getVariable()
            {
                return $this->variable;
            }
        }

    > Απάντηση: 

    > ---

    > ---

    > ---

3. Ποιο πρόβλημα υπάρχει με τον παρακάτω κώδικα ;

        $query =  "SELECT * FROM table WHERE id = $_GET['id']"; 

    > Απάντηση:

    > ---

    > ---

    > ---

4. Τι θα τυπώσει ο παρακάτω κώδικας όταν εκτελεστεί;

        <?php
        $subject = 'There\'s a red apple on the table';
        $pattern = '/a[a-z]+/i';
        $matches = array();
        $result  = preg_match($pattern, $subject, $matches);
        echo json_encode($matches);

    > a. `["apple", "table"]`

    > b. `["apple"]`

    > c. `["apple", "able"]`

    > d. `{"apple", "a", "able"}`

    > Απάντηση:

    > ---

5. Τι πρόβλημα υπάρχει με το παρακάτω html; Πώς μπορεί να διορθωθεί;

        <!doctype html>
        <html lang="en">
            <head>
                <title>demo</title>
                <script>
                    document.getElementById('dynamic-div').innerHTML = '<h1>demo</h1>';
                </script>
            </head>
            <body>
                <div id="dynamic-div"></div>
            </body>
        </html>

    > Απάντηση:

    > ---

    > ---

    > ---

6. Σε περιβάλλον *nix με ποια εντολή θα μπορέσετε να δείτε τα όλα 
τα αρχεία (και τα hidden) που βρίσκονται σε έναν φάκελο;

    > a. `ls -l`

    > b. `dir -a`

    > c. `ll` 

    > d. `ls -a`

    > Απάντηση:

    > ---

7. Τι θα τυπώσει ο παρακάτω κώδικας όταν εκτελεστεί;

        <?php
        function doSomething (&$arg) 
        {
            $return = $arg;
            $arg += 1;
            return $return;
        }
        $a = 3;
        $b = doSomething( $a );
        echo sprintf('$a = %d, $b = %d', $a, $b);

    > a. `$a = 3, $b = 4`

    > b. `$a = 4, $b = 3`

    > c. `$a = 3, $b = 3`

    > d. `$a = 4, $b = 4`

    > Απάντηση:

    > ---

8. Ποιο είναι το Status Code που πρέπει να έχει το HTTP Response του
web server, όταν ζητείται κάποιο resource το οποίο δεν υπάρχει;

    > a. 200

    > b. 404

    > c. 500

    > d. 403

    > Απάντηση:

    > ---

9. Έστω ένα τυπικό REST API με URI http://www.myblog.com/api/v1/post, το οποίο αναφέρεται
στο resource των posts ενός blog. Γράψτε το URI και το HTTP method που 
πρέπει να έχει το request ώστε να:

    a. ανάκτησετε όλα τα posts:

    b. ανακτήσετε το post με id = 3:

    c. δημιουργήσετε ένα νέο post:

    d. ενημερώσετε το post με id = 4: 

    e. διαγράψετε το post με id = 5:
    
    > Απάντηση:

    > a. URI: http://www.myblog.com/api/v1/post__, HTTP method:
    
    > b. URI: http://www.myblog.com/api/v1/post__, HTTP method:
    
    > c. URI: http://www.myblog.com/api/v1/post__, HTTP method:
    
    > d. URI: http://www.myblog.com/api/v1/post__, HTTP method:
    
    > e. URI: http://www.myblog.com/api/v1/post__, HTTP method:

10. Στο ακόλουθο html, τι χρώμα θα έχουν οι παράγραφοι 3, 5, 7;
        
        <!doctype html>
        <html lang="en">
            <head>
                <title>demo</title>
                <style rel="stylesheet">
                    body { color: black; }
                    p.red { color: red; }
                    p:nth-child(2n+1) { color: green; }
                </style>
            </head>
            <body>
                <p>Paragraph 1</p>
                <p>Paragraph 2</p>
                <p>Paragraph 3</p>
                <p>Paragraph 4</p>
                <p>Paragraph 5</p>
                <p>Paragraph 6</p>
                <p class="red">Paragraph 7</p>
                <script>
                    (function() {
                        document.getElementsByTagName('p')[6].style.color = "blue";
                    })();
                </script>
            </body>
        </html>

    > a. Paragraph 3: black Paragraph 5: black Paragraph 7: red 

    > b. Paragraph 3: blue Paragraph 5: green Paragraph 7: red 

    > c. Paragraph 3: green Paragraph 5: green Paragraph 7: red 

    > d. Paragraph 3: green Paragraph 5: green Paragraph 7: blue 

    > Απάντηση:

    > ---

11. Με βάση το standard PSR-0, το οποίο προδιαγράφει το class autoloading 
στην php, ποιο από τα παρακάτω είναι λάθος;

    > a. `\Symfony\Core\Request` => `/project/lib/SymfonyCoreRequest.php`

    > b. `\Zend\Acl` => `/project/lib/Zend/Acl.php`

    > c. `\Zend\Mail\Message` => `/project/lib/Zend/Mail/Message.php`

    > d. `\namespace\package_name\Class_Name` => `/project/lib/namespace/package_name/Class/Name.php`

    > Απάντηση:

    > ---

12. Ποιο storage engine της MySQL υποστηρίζει TRANSACTIONS;
Επιλέξτε το σωστό.
    
    > a. MyISAM

    > b. InnoDB

    > c. MEMORY

    > d. BLACKHOLE

    > Απάντηση:

    > ---

13. Ποιο pattern υλοποιεί η παρακάτω κλάση;

        class DemoClass
        {
            private static $instance;

            private function __construct() {}

            public static function getInstance()
            {
                if(null === static::$instance) {
                    static::$instance = new self();
                }

                return static::$instance;
            }
        }

    > a. Factory

    > b. Adapter

    > c. Singleton

    > d. Proxy

    > Απάντηση:

    > ---

14. Ποια είναι τα προτερήματα του dependency injection pattern; Επιλέξτε
τις σωστές απαντήσεις.

    > a. Επιτρέπει τη ταυτόχρονη και χωρίς εξαρτήσεις ανάπτυξη

    > b. Διευκολύνει το unit testing

    > c. Μειώνει τις εξαρτήσεις μεταξύ υποσυστημάτων

    > d. Όλα τα παραπάνω

    > Απάντηση:

    > ---

15. Στο url http://project.my-repo.com/ υπάρχει το repository του project που
πρόκειται να εργαστείτε. Γράψτε την εντολή με την οποία θα κάνετε 
clone το repository στον φάκελο project του συστήματός σας. Μπορείτε να
επιλέξετε το repository να είναι είτε git, είτε mercurial.

    > Απάντηση:

    > ---

16. Έστω το ακόλουθο apache virtual host configuration.

        <VirtualHost *:80>
          ServerName www.mysite.local
          DocumentRoot /var/www/mysite
          <Directory "/var/www/mysite">
            Options -Indexes FollowSymLinks
            AllowOverride ...
            Order allow,deny
            Allow from all
          </Directory>
        </VirtualHost>

    Ποια τιμή από τις παρακάτω θα ορίζατε στο AllowOverride, ώστε ο 
    apache να χρησιμοποιεί το .htaccess αρχείο, που απαιτείται από την
    εφαρμογή σας.

    > a. All

    > b. None

    > c. htaccess

    > d. Κανένα από τα παραπάνω

    > Απάντηση:

    > ---

17. Μετατρέψτε το ακόλουθο html4 σε html5.

        <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
           "http://www.w3.org/TR/html4/strict.dtd">
        <html lang="en">
          <head>
            <title>Article (HTML4)</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          </head>
          <body>
            <div id="branding">
              <h1>Site name</h1>
              <!-- other page heading content -->
            </div>
            <ul id="nav">
              <li>Site navigation</li>
            </ul>
            <div id="content">
              <div id="main"> <!-- main content (the article) -->
                <h1>Article title</h1>
                <p class="meta">Article metadata</p>
                <p>Article content…</p>
                <p class="article-footer">Article footer</p>
              </div>
              <div id="sidebar"> <!-- secondary content -->
                <h2>Sidebar title</h2>
                <p>Sidebar content…</p>
              </div>
            </div>
            <div id="footer">Footer</div>
          </body>
        </html>

    > Απάντηση:

    > ---

    > ---

    > ---

    > ---

    > ---

    > ---
    
    > ---

    > ---

    > ---
    
    > ---

    > ---

    > ---

    > ---

    > ---

    > ---

    > ---
    
    > ---

    > ---

    > ---
    
    > ---

    > ---

    > ---

    > ---

    > ---

    > ---

    > ---
    
    > ---

    > ---

    > ---
    
    > ---

18. Ποιο είναι το αποτέλεσμα του παρακάτω κώδικα javascript;

        function C(){
            this.a = 1;
            return false;
        }
        console.log(typeof new C());

    > a. `false`

    > b. `object`

    > c. `C`

    > d. `function`

    > Απάντηση:

    > ---

19. Θέλετε να προσθέσετε εικονίδια για τα links στο ακόλουθο html. Τα αρχεία
των εικονιδίων είναι τα `email_go.png`, `folder_go.png` και `lock_go.png`, αντίστοιχα. 
Γράψτε το κατάλληλο css3 το οποίο θα ορίζει ως background τα παραπάνω
εικονίδια

        <p>Lorem ipsum dolor <a href="mailto:email@example.com">email</a> sit amet.</p>
        <p>Nulla lacus metus <a href="ftp://example.com">FTP server</a> luctus eget.</p>
        <p>Etiam luctus tortor <a href="https://example.com">secure server</a> quis.</p>

    > Απάντηση:

    > ---

    > ---

    > ---

    > ---

20. Τι θα τυπώσει ο παρακάτω κώδικας;

        <?php
        $name     = "Joe";
        $surname  = "Doe";
        $sayHello = function() {
            return sprintf("Hello %s", $name, $surname);
        };

        echo $sayHello();

    > a. Hello Joe

    > b. Hello

    > c. Τίποτα

    > d. Hello Joe Doe

    > Απάντηση:

    > ---

