<? php 
class Book {
	
	private $ISBN;
	private $title;
	private $summary;
	private $pages;
	private $language;
	private $publisher;
	private $category;
	private $author;

	public function__construct($ISBN, $title, $summary, $pages, $language, $publisher, $category, $author ){
		$this->ISBN = $ISBN;
		$this->title = $title;
		$this->summary = $summary;
		$this->language = $language;
		$this->pages = $pages;
		$this->publisher = $publisher;
		$this->category = $category;
		$this->author = $author;
	}

	public function getISBN(){
		return $this->ISBN;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getSummary(){
		return $this->summary;
	}

	public function getLanguage(){
		return $this->language;
	}

	public function getPages(){
		return $this->pages;
	}
	public function getPublisher(){
		return $this->publisher;
	}
	public function getPategory(){
		return $this->category;
	}
	public function getAuthor(){
		return $this->author;
	}
}
?>