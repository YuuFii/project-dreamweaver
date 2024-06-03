<!DOCTYPE html>

<head>
    <title>Pop Up</title>
</head>

<body>
    <!-- Popup filter -->
    <div id="filterPopup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Filter Karir</h2>
            <!-- Form filter -->
            <form action="/filter" method="GET">
                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori">
                    <option value="teknologi">Teknologi</option>
                    <option value="bisnis">Bisnis</option>
                    <option value="desain">Desain</option>
                    <!-- Tambahkan opsi lainnya -->
                </select>
                <br><br>
                <button type="submit">Terapkan</button>
            </form>
        </div>
    </div>
</body>

</html>