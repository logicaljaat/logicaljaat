<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <?php
            function getUserIP()
            {
                // Get real visitor IP behind CloudFlare network
                if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                    $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                }
                $client  = @$_SERVER['HTTP_CLIENT_IP'];
                $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
                $remote  = $_SERVER['REMOTE_ADDR'];

                if (filter_var($client, FILTER_VALIDATE_IP)) {
                    $ip = $client;
                } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                    $ip = $forward;
                } else {
                    $ip = $remote;
                }

                return $ip;
            }
            $user_ip = getUserIP();
            echo $user_ip; // Output IP address [Ex: 177.87.193.134]





            function userip()
            {
                if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                        $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
                        return trim($addr[0]);
                    } else {
                        return $_SERVER['HTTP_X_FORWARDED_FOR'];
                    }
                } else {
                    return $_SERVER['REMOTE_ADDR'];
                }
            }

            $usr_ip = userip();
            echo $usr_ip; // Output IP address [Ex: 177.87.193.134]






            function getRealIpAddr()
            {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    // Check IP from internet.
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    // Check IP is passed from proxy.
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    // Get IP address from remote address.
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                return $ip;
            }

            echo getRealIpAddr();


            ?>




        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our navigational tabs and pills to create tabbable panes of local content, even via dropdown menus.
            If you’re building our JavaScript from source, it requires util.js.
            Dynamic tabbed interfaces, as described in the WAI ARIA Authoring Practices, require role="tablist", role="tab", role="tabpanel", and additional aria- attributes in order to convey their structure, functionality and current state to users of assistive technologies (such as screen readers).
            Note that dynamic tabbed interfaces should not contain dropdown menus, as this causes both usability and accessibility issues. From a usability perspective, the fact that the currently displayed tab’s trigger element is not immediately visible (as it’s inside the closed dropdown menu) can cause confusion. From an accessibility point of view, there is currently no sensible way to map this sort of construct t
        </div>

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Use the tab JavaScript plugin—include it individually or through the compiled bootstrap.js file—to extend our navigational tabs and pills to create tabbable panes of local content, even via dropdown menus.
            If you’re building our JavaScript from source, it requires util.js.
            Dynamic tabbed interfaces, as described in the WAI ARIA Authoring Practices, require role="tablist", role="tab", role="tabpanel", and additional aria- attributes in order to convey their structure, functionality and current state to users of assistive technologies (such as screen readers).
            Note that dynamic tabbed interfaces should not contain dropdown menus, as this causes both usability and accessibility issues. From a usability perspective, the fact that the currently displayed tab’s trigger element is not immediately visible (as it’s inside the closed dropdown menu) can cause confusion. From an accessibility point of view, there is currently no sensible way to map this sort of construct t
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>