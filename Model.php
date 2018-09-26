<?php
/*try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', "phpmyadmin",'11235813');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$articles = $dbh-> query('SELECT * FROM articles');*/

class Model
{
    private $articles = [
        1 => ['autor'   => 'First Article Autor',
            'title'   => 'First Article Title',
            'content' => 'First Article Content.',
            'category' => 'First Article Category.',
        ],
        2 => ['title'   => 'Second Article',
            'content' => 'Second Article Content.'
        ],
        3 => ['title'   => 'terd Article',
            'content' => 'Second Article Content.'
        ],
        4 => ['title'   => 'for Article',
            'content' => 'Second Article Content.'
        ],
    ];


    public function getArticles()
    {
        return $this->articles;
    }



	public function getArticle($id)
	{
		if (isset($this->articles[$id])) {
			return $this->articles[$id];
		}
	}


}