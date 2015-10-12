<?php
function selectNewsArticles($page){

    global $mysqli;
    $x = (($page-1) * 6);
    $query = "SELECT * FROM newsarticles ORDER BY date_created DESC LIMIT ".$x.",6 ";
    $result = $mysqli->query($query);
    return $result;

}

function getPageCount(){
    global $mysqli;
    $result = $mysqli->query("SELECT id FROM newsarticles");
    $rowcount = $result->num_rows;
    $pagecount = ceil($rowcount / 6);
    return $pagecount;
}

function getSearchResults($page,$search){
    global $mysqli;
    $x = (($page-1) * 6);
    $query = 	"SELECT * FROM newsarticles
			WHERE title LIKE '%".$search."%' OR
			content LIKE '%".$search."%'
			ORDER BY date_created DESC LIMIT ".$x.",6 ";
    $resultTitle = $mysqli->query($query);
    return $resultTitle;
}
function getSearchpagecount($search){
    global $mysqli;
    if ($search != '') {
        $pagequery = $mysqli->query("SELECT id FROM newsarticles WHERE title LIKE '%".$search."%' OR content LIKE '%".$search."%'");
        $rowcount = $pagequery->num_rows;
        $pagecount = ceil($rowcount / 6);
    }else{
        $pagecount = 0;
    }
    return $pagecount;
}
function uploadStory(){
    $query = "INSERT INTO newsarticles(title,
									content,
									image)
					VALUES('".$_POST['title']."',
							'".$_POST['content']."',
							'blank')";
    $result = $mysqli->query($query);
    return $result;
}

