<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? 'Assistente Virtual - Festa' ?></title>

  <!-- favicon -->
   
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <script>
    let tema = localStorage.getItem('thay_tema');
    if (!tema && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      tema = 'escuro';
    }
    document.documentElement.setAttribute('data-tema', tema || 'claro');
    document.documentElement.setAttribute('data-bs-theme', tema === 'escuro' ? 'dark' : 'light');
  </script>
  
</head>
