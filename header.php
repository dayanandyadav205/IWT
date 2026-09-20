<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Collapse Navigation Header</title>

<style>
        /* Base styles and clean-up */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
          /* Semantic Block Stylings */
        header, nav, main, footer, article, section, aside {
            padding: 1.5rem;
            border-radius: 6px;
        }

        header {
            background-color: #1a1a24;
            color: #fff;
            text-align: center;
            margin-bottom: 0.5rem;
        }



        /* Mobile-First Navigation (Vertical stacked menu) */
        /* General Desktop Styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  padding: 20px;
}

.navbar {
  background-color: #222;
  border-color: #080808;
  border-radius: 4px;
}

.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 15px;
  position: relative;
}

.navbar-collapse {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.nav-menu {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
}

.nav-item > a {
  display: block;
  color: #9d9d9d;
  text-decoration: none;
  padding: 15px 15px;
  font-size: 14px;
  transition: background-color 0.2s, color 0.2s;
}

.nav-item > a:hover {
  color: #fff;
}

.nav-item.active > a {
  color: #fff;
  background-color: #080808;
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 5px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

/* Desktop Hover Dropdown */
.dropdown {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li a {
  display: block;
  padding: 3px 20px;
  color: #333;
  white-space: nowrap;
  text-decoration: none;
  line-height: 1.42;
}

.dropdown-menu li a:hover {
  color: #262626;
  background-color: #f5f5f5;
}

.dropdown-large {
  max-height: 400px;
  overflow-y: auto;
  min-width: 280px;
}

.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  color: #777;
  font-weight: bold;
  text-transform: uppercase;
}

.dropdown-divider {
  height: 1px;
  margin: 9px 0;
  background-color: #e5e5e5;
}

.navbar-toggle {
  display: none;
  background-color: transparent;
  border: 1px solid #333;
  border-radius: 4px;
  padding: 9px 10px;
  margin: 8px 0;
  cursor: pointer;
}

.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  background-color: #fff;
  border-radius: 1px;
}

.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}

/* ==========================================================================
   Mobile/Tablet Media Queries (Screens under 768px widths)
   ========================================================================== */
@media (max-width: 767px) {
    header{
        font-size:50%;
    }
  .nav-container {
    flex-direction: column;
    align-items: flex-start;
    padding: 5px 15px;
  }

  .navbar-toggle {
    display: block;
    align-self: flex-end;
  }

  .navbar-collapse {
    display: none;
    flex-direction: column;
    width: 100%;
    padding-bottom: 10px;
  }

  .navbar-collapse.show {
    display: flex;
  }

  .nav-menu {
    flex-direction: column;
    width: 100%;
  }

  .nav-item > a {
    padding: 12px 0;
    border-bottom: 1px solid #333;
  }

  /* Hidden on mobile initially, displays inline instead of absolute float */
  .dropdown-menu {
    position: static;
    display: none; /* Submenu closed by default now */
    float: none;
    background-color: #333;
    box-shadow: none;
    border: none;
    margin: 0;
    padding: 5px 0 5px 15px;
  }

  /* Reveal child items when parent element is toggled to '.open' via JS */
  .nav-item.dropdown.open .dropdown-menu {
    display: block;
  }

  .dropdown-menu li a {
    color: #9d9d9d;
    padding: 8px 10px;
  }

  .dropdown-menu li a:hover {
    color: #fff;
    background-color: transparent;
  }
  
  .dropdown-large {
    max-height: 300px;
    overflow-y: auto;
  }
}
    </style>
</head>
<body>  
 <header>
        <h1>Internet & Web Technology</h1>
        <h2>B.Tech, CSE</h2>
        <h3>V Semester</h3>
    </header>
<nav class="navbar">
  <div class="nav-container">
    
    <!-- Mobile Hamburger Toggle Button -->
    <button class="navbar-toggle" id="menuToggle" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <!-- Navigation Wrappers -->
    <div class="navbar-collapse" id="navbarCollapse">
      <!-- Left Aligned Links -->
      <ul class="nav-menu">
        <li class="nav-item active"><a href="/index.php">Home</a></li>
        
        <!-- HTML Dropdown -->
        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">HTML <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/IWT_HTML_Code/semantic.php">Semantic HTML</a></li>
            <li><a href="/IWT_HTML_Code/headings.php">Headings</a></li>
            <li><a href="/IWT_HTML_Code/lists.php">Lists</a></li>
            <li><a href="/IWT_HTML_Code/media_elements.php">Media Elements</a></li>
            <li><a href="/IWT_HTML_Code/paragraph_formatting.php">Paragraph Formatting</a></li>
            <li><a href="/IWT_HTML_Code/table.php">Table</a></li>
          </ul>
        </li>

        <!-- CSS Dropdown -->
        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">CSS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/IWT_CSS_Code/1_Selectors.php">Selectors</a></li>
            <li><a href="/IWT_CSS_Code/2_bg_images.php">Background Images</a></li>
            <li><a href="/IWT_CSS_Code/3_colours_and_properties.php">Colors</a></li>
            <li><a href="/IWT_CSS_Code/4_manipulating_texts.php">Texts</a></li>
            <li><a href="/IWT_CSS_Code/5_fonts.php">Fonts</a></li>
            <li><a href="/IWT_CSS_Code/6_borders_and_boxes.php">Borders & Boxes</a></li>
            <li><a href="/IWT_CSS_Code/7.1_positioning_static.php">Position Static</a></li>
            <li><a href="/IWT_CSS_Code/7.2_positionin_sticky.php">Position Sticky</a></li>
            <li><a href="/IWT_CSS_Code/7.3_positioning_fixed.php">Position Fixed</a></li>
            <li><a href="/IWT_CSS_Code/7.4_positioning_relative.php">Position Relative</a></li>
            <li><a href="/IWT_CSS_Code/7.5_positioning_absolute.php">Position Absolute</a></li>
            <li><a href="/IWT_CSS_Code/8_google_fonts.php">Google Fonts</a></li>
          </ul>
        </li>

        <!-- JavaScript Dropdown -->
        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">JavaScript <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-large">
            <li class="dropdown-header">JavaScript Applications</li>
            <li><a href="/IWT_JavaScript_Code/week3_rps.php">RPS Game</a></li>
            <li><a href="/IWT_JavaScript_Code/week3_simple_quiz.php">Simple Quiz</a></li>
            <li><a href="/IWT_JavaScript_Code/week4_readingDashboard.php">Reading Dashboard</a></li>
            <li><a href="/IWT_JavaScript_Code/week4_shoppingCart.php">Shopping Cart</a></li>
            <li><a href="/IWT_JavaScript_Code/week4_toDoList.php">To Do List</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-header">JavaScript Topics</li>
            <li><a href="/IWT_JavaScript_Code/1. variables.php">1. Variables</a></li>
            <li><a href="/IWT_JavaScript_Code/2. function1.php">2.1 Function 1</a></li>
            <li><a href="/IWT_JavaScript_Code/2. function2.php">2.2 Function 2</a></li>
            <li><a href="/IWT_JavaScript_Code/2. function3.php">2.3 Function 3</a></li>
            <li><a href="/IWT_JavaScript_Code/3.1 conditions (if).php">3.1 if</a></li>
            <li><a href="/IWT_JavaScript_Code/3.2 conditions (if.. else).php">3.2 if...else</a></li>
            <li><a href="/IWT_JavaScript_Code/3.3 conditions (if.. else if ... else).php">3.3 if...else...if</a></li>
            <li><a href="/IWT_JavaScript_Code/3.4 conditions (switch case).php">3.4 Switch Case</a></li>
            <li><a href="/IWT_JavaScript_Code/4.1 loops (for loop).php">4.1 for loop</a></li>
            <li><a href="/IWT_JavaScript_Code/4.2 loops (while loop).php">4.2 while loop</a></li>
            <li><a href="/IWT_JavaScript_Code/4.3 loops (do... while loop).php">4.3 do... while loop</a></li>
            <li><a href="/IWT_JavaScript_Code/5.1 pop up boxes (alert box).php">5.1 Alert box</a></li>
            <li><a href="/IWT_JavaScript_Code/5.2 pop up boxes (confirm box).php">5.2 Confirm box</a></li>
            <li><a href="/IWT_JavaScript_Code/5.3 pop up boxes (prompt box).php">5.3 Prompt box</a></li>
            <li><a href="/IWT_JavaScript_Code/6. objects.php">6. Objects</a></li>
            <li><a href="/IWT_JavaScript_Code/7. own objects.php">7. Own Objects</a></li>
            <li><a href="/IWT_JavaScript_Code/8.1 DOM manipulation.php">8.1 Dom manipulation (Elements)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.2 DOM manipulation.php">8.2 Dom manipulation (Attributes)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.3 DOM manipulation.php">8.3 Dom manipulation (Styles)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.4 DOM manipulation.php">8.4 Dom manipulation (Add Elements)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.5 DOM manipulation.php">8.5 Dom manipulation (Remove Elements)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.6 DOM manipulation.php">8.6 Dom manipulation (Add Attributes)</a></li>
            <li><a href="/IWT_JavaScript_Code/8.7 DOM manipulation.php">8.7 Dom manipulation (Remove Attributes)</a></li>
            <li><a href="/IWT_JavaScript_Code/9.1 Forms and validations1.php">9.1 Form Validation 1</a></li>
            <li><a href="/IWT_JavaScript_Code/9.2 Forms and validations2.php">9.2 Form Validation 2</a></li>
            <li><a href="/IWT_JavaScript_Code/10. DHTML.php">10. DHTML</a></li>
            <li><a href="/IWT_JavaScript_Code/11.1 onclick event.php">11.1 Event onclick</a></li>
            <li><a href="/IWT_JavaScript_Code/11.2 onsubmit events.php">11.2 Event onsubmit</a></li>
            <li><a href="/IWT_JavaScript_Code/11.3 onmouseup & onmousedown event.php">11.3 Event onmouseup & onmousedown</a></li>
          </ul>
        </li>

        <!-- PHP Dropdown -->
        <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">PHP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/IWT_PHP_Code/array_associative.php">PHP Associative Array</a></li>
            <li><a href="/IWT_PHP_Code/array_indexed.php">PHP Indexed Array</a></li>
            <li><a href="/IWT_PHP_Code/array_multidimensional.php">PHP Multidimensional Array</a></li>
            <li><a href="/IWT_PHP_Code/browser_detection1.php">Browser Detection 1</a></li>
            <li><a href="/IWT_PHP_Code/browser_detection2.php">Browser Detection 2</a></li>
            <li><a href="/IWT_PHP_Code/condition if else.php">PHP if... else</a></li>
            <li><a href="/IWT_PHP_Code/condition if elseif.php">PHP if... else.. if</a></li>
            <li><a href="/IWT_PHP_Code/condition if.php">PHP if condition</a></li>
            <li><a href="/IWT_PHP_Code/condition switch.php">PHP Switch case</a></li>
            <li><a href="/IWT_PHP_Code/function.php">PHP Function</a></li>
            <li><a href="/IWT_PHP_Code/index.php">PHP Home</a></li>
            <li><a href="/IWT_PHP_Code/login.php">PHP Login</a></li>
            <li><a href="/IWT_PHP_Code/logout.php">PHP Logout</a></li>
            <li><a href="/IWT_PHP_Code/loop do while.php">PHP do while loop</a></li>
            <li><a href="/IWT_PHP_Code/loop for.php">PHP for Loop</a></li>
            <li><a href="/IWT_PHP_Code/loop foreach.php">PHP foreach loop</a></li>
            <li><a href="/IWT_PHP_Code/loop while.php">PHP while loop</a></li>
            <li><a href="/IWT_PHP_Code/strings.php">PHP strings</a></li>
          </ul>
        </li>
      </ul>

      <!-- Right Aligned Items -->
      <ul class="nav-menu nav-right">
        <li class="nav-item"><a href="/form.php">Sign Up</a></li>
        <li class="nav-item"><a href="/login_user.php">User Login</a></li>
        <li class="nav-item"><a href="/login_admin.php">Admin Login</a></li>
        <li class="nav-item"><a href="/contact.php">Contact Us</a></li>
      </ul>
    </div>

  </div>
</nav>

<!-- Clean Vanilla JavaScript Handling Toggles -->
<script>
  // Primary Mobile Menu Toggle
  document.getElementById('menuToggle').addEventListener('click', () => {
    document.getElementById('navbarCollapse').classList.toggle('show');
  });

  // Mobile Sub-dropdown Toggle logic
  document.querySelectorAll('[data-toggle="dropdown"]').forEach(toggleButton => {
    toggleButton.addEventListener('click', function(e) {
      // Check if view width matches mobile break-point before executing block
      if (window.innerWidth < 768) {
        e.preventDefault();
        const parentListItem = this.parentElement;
        
        // Close other open inner menus if necessary
        document.querySelectorAll('.nav-item.dropdown').forEach(item => {
          if (item !== parentListItem) item.classList.remove('open');
        });

        // Open/Close target submenu
        parentListItem.classList.toggle('open');
      }
    });
  });
</script>

</body>
</html>
