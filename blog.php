<?php
include 'koneksi.php';
?>

<?php
include 'koneksi.php';

$query = "SELECT * FROM blog ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='blog-post'>";
    echo "<h3>" . htmlspecialchars($row['judul']) . "</h3>";
    echo "<p><small>" . htmlspecialchars($row['tanggal']) . "</small></p>";
    echo "<p>" . nl2br(htmlspecialchars($row['isi'])) . "</p>";
    echo "</div>";
}

mysqli_close($conn);
?>