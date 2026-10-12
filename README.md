# Facebook Stream Countdown

A simple event countdown page designed to be added as a browser source in OBS while streaming to Facebook. It helps Pages build engagement before an event. Admins can create a countdown or count-up, add a heading, and choose a background image.

<img width="2561" height="946" alt="3" src="https://github.com/user-attachments/assets/1784b3ff-d5cf-44f1-b4e2-e8d3a8a4a6c8" />

## Technology

- PHP and MySQL/MariaDB
- HTML, CSS, JavaScript, Bootstrap, and jQuery
- jQuery Countdown plugin

## Setup

1. Run the project on a PHP-enabled web server with the `mysqli` extension and MySQL or MariaDB.
2. Create the database and tables by importing `schema.sql`:

   ```sh
   mysql -u YOUR_DB_USER -p < schema.sql
   ```

3. Configure these environment variables for PHP: `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`, and `APP_URL`. Set `APP_URL` to the app's base URL with a trailing slash; leave it empty if the app is served from the domain root.
4. Make sure PHP can write to the `uploads/` directory.
5. Add an admin username and password to the database's `admin` table, then open the app's base URL and log in.

## Use

1. In the dashboard, enter the event heading and date/time, select count down or count up, choose a JPG or PNG background, and save.
2. In OBS, add a **Browser Source** using `https://YOUR_DOMAIN/view.php` (replace with your app's URL) and size it to your stream canvas.
3. Start your Facebook stream. The browser source displays the timer for viewers.

## Screenshots
<img width="2561" height="946" alt="1" src="https://github.com/user-attachments/assets/4242e087-ec21-4bf8-8856-7be39dd3bb2e" />
<img width="2561" height="946" alt="2" src="https://github.com/user-attachments/assets/d39e9b01-51df-4237-842a-ce8e53745e9b" />
<img width="1440" height="815" alt="4" src="https://github.com/user-attachments/assets/5bf0fd84-69ff-44f4-8286-8c77fb5a442b" />

