# Mstudio YouTube Link Bundle

Ein Contao 5‑Bundle, das ein Inhaltselement **„YouTube Link“** bereitstellt.  
Es zeigt das Thumbnail eines YouTube‑Videos an, inklusive Overlay‑Playbutton, und verlinkt auf die YouTube‑NoCookie‑Version.

## 🚀 Features

- Neues Inhaltselement `youtube_link`
- Eingabe der YouTube‑Video‑ID
- Auswahl der Thumbnail‑Qualität (maxresdefault, sddefault, hqdefault, mqdefault, default)
- Automatische Fallback‑Erkennung, falls ein Thumbnail nicht existiert
- DSGVO‑freundlicher Link zu `youtube-nocookie.com`
- Sauberes Twig‑Template ohne Inline‑Styles
- Modernes SCSS‑Modul (BEM‑Struktur)
- Overlay‑Playbutton mit SVG

---

## 📦 Installation

### 1. Über Composer

```bash
composer require mstudio/youtube-link-bundle

vendor/bin/contao-console cache:clear
