<?PHP
class user
{
    private $id;
    private $username;
    private $email;
    private $password;
    public $role;

    function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    // getter 
    function getId()
    {
        return $this->id;
    }
    function getUsername()
    {
        return $this->username;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }

    // setter 

    function setId($id)
    {
        $this->id = $id;
    }
    function setUsername($username)
    {
        $this->username = $username;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
}
