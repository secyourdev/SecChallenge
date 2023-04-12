# Vérifier si Chocolatey est installé
if(!(Get-Command choco -ErrorAction SilentlyContinue)){
    # Télécharger et installer Chocolatey
    Write-Host "Chocolatey n'est pas installé. Installation en cours..."
    Invoke-Expression ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))
}

# Détection de la commande unrar
if(!(Get-Command unrar -ErrorAction SilentlyContinue)){
    Write-Host "unrar n'est pas installé. Installation en cours..."
    choco install -y unrar
}

# Extraction des fichiers avec unrar
& unrar x .\db\ib.rar .\db\
& unrar x .\wordpress\wp-includes.rar .\wordpress
& unrar x .\wordpress\wp-admin.rar .\wordpress
& unrar x .\wordpress\wp-content\languages.rar .\wordpress\wp-content
& unrar x .\wordpress\wp-content\plugins.rar .\wordpress\wp-content
& unrar x .\wordpress\wp-content\themes.rar .\wordpress\wp-content

# Modification des permissions
Get-ChildItem .\db -Recurse | ForEach-Object { $_.Attributes = $_.Attributes -bor 'ReadOnly' }
Get-ChildItem .\wordpress -Recurse | ForEach-Object { $_.Attributes = $_.Attributes -bor 'ReadOnly' }
