<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió d'Usuaris</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎯 Gestió d'Usuaris</h1>
            <p>Sistema CRUD - ASIXc2AC</p>
        </div>

        <div class="content">
            <h2 class="section-title">📋 Llista d'usuaris</h2>
            
            <?php
            $result = $conn->query("SELECT * FROM users");
            if ($result->num_rows > 0) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><strong>#<?= $row['id'] ?></strong></td>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['email']) ?></td>
                                <td class="actions">
                                    <a href='edit.php?id=<?= $row['id'] ?>' class="btn-edit">✏️ Editar</a>
                                    <a href='delete.php?id=<?= $row['id'] ?>' class="btn-delete" onclick="return confirm('Estàs segur que vols eliminar aquest usuari?')">🗑️ Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <div class="empty-state">
                    <p>No hi ha usuaris registrats</p>
                    <p style="font-size: 0.9em; color: #bbb;">Comença afegint el primer usuari!</p>
                </div>
            <?php } ?>

            <h2 class="section-title">➕ Afegir nou usuari</h2>
            <div class="form-container">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="name">👤 Nom:</label>
                        <input type="text" id="name" name="name" placeholder="Introdueix el nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">📧 Email:</label>
                        <input type="email" id="email" name="email" placeholder="exemple@correu.com" required>
                    </div>
                    <button type="submit">✨ Afegir Usuari</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
