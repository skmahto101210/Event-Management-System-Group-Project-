<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                <hr class="divider my-4" />
            </div>
        </div>
    </div>
</header>

<!-- About Us Section -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Welcome to Eventus, your premier destination for seamless event planning and management solutions. At Eventus, we are passionate about bringing your events to life, ensuring unforgettable experiences that exceed your expectations every step of the way.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h2>Meet Our Team:</h2>
            </div>
        </div>
        
        <div class="row">
            <?php
            $teamMembers = array(
                array("name" => "Saksham Kumar", "photo" => "C:/xampp/htdocs/Event_Management_System/Event_Management_System/jai.jpeg.jpg"),
                array("name" => "Jai Kumar", "photo" => "jane_smith.jpg"),
                array("name" => "Pushpak Patel", "photo" => "michael_johnson.jpg")
            );

            foreach ($teamMembers as $member):
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                <img src="team/<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>" width="200" class="mb-3 team-member-img">
                <h4><?php echo $member['name']; ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .team-member-img {
        transition: transform 0.3s ease;
    }

    .team-member-img:hover {
        transform: scale(1.1);
    }
</style>
