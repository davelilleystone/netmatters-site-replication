<?php include './includes/db_config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $password);
} catch (PDOException $ex) {
    echo "<p>Unable to load Latest News</p> $ex";
    exit();
}

$query = $conn->prepare("SELECT * FROM latest_news");
try {
    $query->execute();
    $data = $query->fetchAll();
} catch (PDOException $ex) {
    echo "<p>Unable to load Latest News</p>";
    exit();
}

function format_date($date, $format = 'jS F Y')
{
    return date($format, strtotime($date));
}

?>

<?php foreach ($data as $row) : ?>
    <div class="latest-news__card latest-news__card--<?= $row['card_theme_colour']; ?>-theme <?= $row["card_hidden"] ? 'latest-news__card--hide' : ''; ?>">
        <a class="latest-news__card-overlay" href="#"></a>
        <header>
            <picture>
                <img class="latest-news__card-image" src="<?= $row["card_image"]; ?>" alt="<?= $row["card_image_alt"]; ?>" />
            </picture>
            <a class="latest-news__card-tooltip" href="#"><?= $row["card_tooltip"]; ?></a>
        </header>
        <div class="latest-news__card-content">
            <h3 class="latest-news__card-content-heading">
                <a href="#"><?= $row["card_heading"]; ?>
                    <?= $row["card_read_time"] ? "<span> {$row['card_read_time']}</span>" : ''; ?></a>
            </h3>
            <p class="latest-news__card-content-text">
                <?= $row["card_content"]; ?>
            </p>
            <a href="#" class="latest-news__card-content-btn">Read More</a>
            <footer>
                <div class="latest-news__card-user">
                    <div class="latest-news__card-user-icon">
                        <picture><img src="<?= $row["user_icon"]; ?>" alt="<?= $row["user_name"]; ?>" />
                        </picture>
                    </div>
                    <div class="latest-news__card-user-meta-container">
                        <div class="latest-news__card-user-posted-by">Posted by <?= $row["user_name"]; ?></div>
                        <div class="latest-news__card-user-date-posted"><?= format_date($row["date_posted"]); ?></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<?php endforeach; ?>