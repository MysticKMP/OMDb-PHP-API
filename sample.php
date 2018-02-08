<?php
include 'omdb.class.php';

try {
    //Init OMDb and include data from Rotten Tomatoes
    $omdb = new OMDb( ['tomatoes' => TRUE, 'apikey' => '00000000'] );

    //Get by title
    $movie = $omdb->get_by_title('Pulp Fiction');

    //Get by IMDb id
    $movie = $omdb->get_by_id('tt0057012');

    //Get multiple titles, limited info see the README
    $movie = $omdb->search('James Bond');

}catch(Exception $e) {
    echo $e->getMessage();
}
?>