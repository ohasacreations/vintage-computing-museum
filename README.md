# 📼 The Retro-Tech Archive (AL ICT Revision Project)

A comprehensive web development project built to revise the entire HTML, CSS, and PHP Database syllabus for AL ICT. 

The website follows a "Vintage Computing" theme, allowing for the legitimate use of legacy HTML tags (like `marquee` and `font`) alongside modern CSS and PHP backend integration.

Please read the "Instructions.pdf"

## 📋 Project Overview

This project covers:
- **HTML:** Text formatting, tables, lists, framesets, forms, multimedia, and meta tags.
- **CSS:** Selectors (ID, Class, Group, Universal), Box Model, Pseudo-classes, and layout.
- **PHP:** Database connection (`mysqli`), form handling (`$_POST`), and data insertion.
- **MySQL:** Database creation and data types.

---

## 🛠 Installation & Setup

1. **Clone the repository** into your server folder (e.g., `htdocs` for XAMPP or `www` for WAMP).
2. **Start Apache and MySQL** via your XAMPP/WAMP control panel.
3. **Import the Database** (See Phase 1 below).
4. **Access the site** via browser: `http://localhost/RetroProject/index.html`.

---

## 🚀 Development Phases

### Phase 1: Database Setup (MySQL)
Configured using **phpMyAdmin**.

1. **Database Name:** `retro_club`
2. **Table Name:** `members`
3. **Columns:**
   - `id`: INT, Primary Key, Auto Increment
   - `username`: VARCHAR(50)
   - `fav_device`: VARCHAR(50)
   - `joined_at`: DATE

### Phase 2: Styling (`style.css`)
Implemented various CSS Selectors to style the theme:

- **Universal Selector:** `* { box-sizing: border-box; }`
- **Body:** Background image and font family setup.
- **Group Selector:** `h1, h2` (Center align, Uppercase, Spacing).
- **Class Selectors:** 
  - `.container` (Main layout wrapper).
  - `.justified-text` (Text alignment and indentation).
- **ID Selector:** `#navbar` (Navigation bar styling).
- **Pseudo-classes:** Styled `a:link`, `a:visited`, `a:hover`, and `a:active`.

### Phase 3: The Home Page (`index.html`)
Covers basic HTML structure and text formatting.

- **Meta Tags:** Keywords, Description, Author, and Refresh (60s).
- **CSS Integration:** Linked External CSS and used Internal CSS to override specific styles.
- **Legacy Attributes:** Used `bgcolor` and `text` in `<body>`.
- **Text Formatting:**
  - `<marquee>` for scrolling text.
  - Usage of `<b>`, `<i>`, `<u>`, `<sup>`, `<sub>`, `<strike>`, `<small>`, `<mark>`, and `<font>`.
  - `<pre>` tag for ASCII art/code display.
- **Inline CSS:** Applied via the `style` attribute on headings.

### Phase 4: Specifications (`specs.html`)
Focuses on structured data display.

- **Lists:**
  - Ordered Lists (`type="I"`).
  - Nested Unordered Lists (`type="disc"`).
  - Definition Lists (`dl`, `dt`, `dd`).
- **Tables:**
  - Attributes: `border`, `cellpadding`, `cellspacing`, `bgcolor`.
  - Structure: `thead`, `tr`, `th`, `td`.
  - Merging: Implemented `colspan` and `rowspan`.

### Phase 5: Multimedia Gallery (`gallery.html`)
Focuses on media integration.

- **Images:** Attributes for `alt`, `border`, `width`, `height`.
- **Image Maps:** Created clickable areas (`rect`, `circle`) on a single image.
- **Audio:**
  - HTML5 `<audio>` tag.
  - Legacy `<bgsound>` tag.
  - Direct download links.
- **Video:**
  - HTML5 `<video>` tag.
  - Legacy `<embed>` and `<noembed>` handling.

### Phase 6: Legacy Layouts (`frames.html`)
Demonstration of the deprecated Frameset model.

- **Structure:** 
  - Top Frame: Navigation (`index.html`).
  - Bottom Frame: Split into columns (Specs and Gallery).
- **Tag:** `<frameset>` used instead of `<body>`.

### Phase 7: Membership Form (`join.php`)
Full-stack integration using PHP forms.

- **Frontend (HTML Form):**
  - Inputs: Text, Password, Date, Number (`min`/`max`), Radio, Checkbox, File, Hidden.
  - Elements: `fieldset`, `legend`, `select/option`, `textarea`.
  - Buttons: Submit, Reset, Generic Button.
- **Backend (PHP):**
  - Connection: `mysqli_connect`.
  - Logic: Checked for `$_POST['submit']`.
  - Action: Inserted user data into the `retro_club` database.

---

## 👤 Author

**Hasindu Ohasa**  
*AL ICT Student Revision Project*
