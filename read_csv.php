<!-- read_csv.php -->
<?php
// Ruta al archivo CSV con los datos de los speakers
$csv_file = '/Users/sebasmos/Desktop/spaceappspopayan.github.io/data/data.csv';

// Lee el contenido del archivo CSV en un array
if (($handle = fopen($csv_file, 'r')) !== false) {
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        // $data[0] contiene la ruta de la imagen
        // $data[1] contiene el nombre del speaker
        // $data[2] contiene la descripción del speaker

        echo '<div class="col-lg-4 col-md-6">';
        echo '<div class="speaker">';
        echo '<img src="' . $data[0] . '" alt="' . $data[1] . '" class="img-fluid people-img">';
        echo '<div class="details">';
        echo '<h3><a href="speaker-details.html">' . $data[1] . '</a></h3>';
        echo '<p>' . $data[2] . '</p>';
        echo '<div class="social">';
        echo '<a href=""><i class="fa fa-twitter"></i></a>';
        echo '<a href=""><i class="fa fa-facebook"></i></a>';
        echo '<a href=""><i class="fa fa-google-plus"></i></a>';
        echo '<a href=""><i class="fa fa-linkedin"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    fclose($handle);
}
?>
