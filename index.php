<?php
session_start();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$name = "Anas Mohammad E. Demonteverde";
$title = "IT Professional & Full-Stack Developer";
$location = "Zamboanga City, Philippines";
$email = "anasdemonteverde@gmail.com";
$phone = "0956 158 2096";
$summary = "Versatile IT professional with a unique background in both technical support and creative media production. Combines technical proficiency in SQL and web-based systems with strong collaborative skills developed through freelance projects. Dedicated to applying problem-solving skills and a fast-learning attitude to drive project success.";

$education = [
    [
        "school" => "Western Mindanao State University",
        "location" => "Zamboanga City",
        "degree" => "BS Information Technology",
        "period" => "Jul 2021 – Mar 2027",
        "icon" => "fa-graduation-cap"
    ],
    [
        "school" => "International Philippine School in Riyadh",
        "location" => "Riyadh, KSA",
        "degree" => "Elementary to High School",
        "period" => "Jun 2008 – Mar 2021",
        "icon" => "fa-school"
    ]
];

$experience = [
    [
        "company" => "Freelance Developer",
        "role" => "Full-Stack Developer",
        "location" => "Zamboanga City",
        "period" => "Jan 2024 – Present",
        "current" => true,
        "bullets" => [
            "Developed a comprehensive <strong>Dental Clinic Management System</strong> for City Smile Dental Clinic (Dr. Almarhiza Kalinggalan) in Brgy. San Jose, Zamboanga City.",
            "Designed features to streamline patient appointments, record-keeping, and clinic operations.",
            "Managed version control and project documentation via GitHub: <a href='https://github.com/nooniman/CitySmilesRepo' target='_blank'>github.com/nooniman/CitySmilesRepo</a>"
        ]
    ],
    [
        "company" => "AFLAM Productions",
        "role" => "Sound Asst. and Boom Operator",
        "location" => "Riyadh, KSA",
        "period" => "Jun 2023 – Sep 2023",
        "current" => false,
        "bullets" => [
            "Operated sound equipment and boom microphones to capture high-quality audio for film productions.",
            "Collaborated with directors and sound teams to balance recordings and troubleshoot technical issues on set.",
            "Ensured optimal sound capture by effectively communicating requirements with crew members."
        ]
    ]
];

$projects = [
    [
        "title" => "Dental Clinic Management System",
        "description" => "A comprehensive system for City Smile Dental Clinic to streamline patient appointments, record-keeping, and clinic operations.",
        "tags" => ["Full-Stack", "PHP", "MySQL", "Web App"],
        "github" => "https://github.com/nooniman/CitySmilesRepo",
        "icon" => "fa-tooth"
    ],
    [
        "title" => "Web-Based Dormitory Manager",
        "description" => "A web-based application designed to manage dormitory logistics and tenant data, featuring room assignments and occupancy tracking.",
        "tags" => ["Web App", "PHP", "MySQL", "Academic"],
        "github" => "https://github.com/nooniman/WebBasedDormManager",
        "icon" => "fa-building"
    ]
];

$skills = [
    "Technical" => [
        ["name" => "SQL / DBMS", "level" => 85],
        ["name" => "Web Development", "level" => 80],
        ["name" => "Microsoft Office", "level" => 90],
        ["name" => "Technical Support", "level" => 85],
        ["name" => "Audio/Video Editing", "level" => 75],
        ["name" => "Operating Systems", "level" => 80],
    ],
    "Languages" => ["Filipino", "English", "Arabic", "Spanish", "Japanese"],
    "Interests" => ["Photography", "Electronics", "Shortwave Radio Listening", "Music Production", "Badminton"]
];

$certifications = [
    [
        "title" => "Google Technical Support Course",
        "issuer" => "Google / Coursera",
        "description" => "Completed rigorous training in IT support, covering troubleshooting, customer service, and system administration.",
        "icon" => "fa-certificate"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= htmlspecialchars($name) ?> | Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAV -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#hero" class="nav-logo">NAS<span>.</span></a>
            <ul class="nav-links" id="navLinks">                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact" class="nav-cta">Contact</a></li>
            </ul>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-blob blob-1"></div>
            <div class="hero-blob blob-2"></div>
            <div class="hero-grid"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span> Available for opportunities
            </div>
            <h1 class="hero-name">
                <?php
                $parts = explode(" ", $name);
                $first = array_shift($parts);
                echo htmlspecialchars($first) . " <span>" . htmlspecialchars(implode(" ", $parts)) . "</span>";
                ?>
            </h1>
            <p class="hero-title"><?= htmlspecialchars($title) ?></p>
            <p class="hero-location"><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($location) ?></p>            <div class="hero-actions">                <a href="#projects" class="btn btn-primary">View My Work <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#contact" class="btn btn-outline">Get In Touch</a>
            </div>
            <div class="hero-socials">
                <a href="mailto:<?= $email ?>" title="Email"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://github.com/nooniman" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll Down</span>
            <div class="scroll-line"></div>
        </div>
    </section>    <!-- ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-label">01. About</div>
            <div class="about-grid">
                <div class="about-text">
                    <h2 class="section-title">Who I Am</h2>
                    <p class="about-summary"><?= htmlspecialchars($summary) ?></p>
                    <div class="about-stats">
                        <div class="stat">
                            <span class="stat-num">2+</span>
                            <span class="stat-label">Years<br>Freelancing</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">2+</span>
                            <span class="stat-label">Projects<br>Completed</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">5</span>
                            <span class="stat-label">Languages<br>Spoken</span>
                        </div>
                    </div>
                </div>
                <div class="about-photo-wrap">
                    <!-- =====================================================
                         PROFILE PHOTO
                    ====================================================== -->
                    <div class="profile-photo-frame">
                        <img
                            src="assets/images/profile.jpg"
                            alt="Photo of <?= htmlspecialchars($name) ?>"
                            class="profile-photo"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        />
                        <div class="profile-photo-placeholder">
                            <i class="fa-solid fa-camera"></i>
                            <span>Add <code>assets/images/profile.jpg</code></span>
                        </div>
                        <div class="profile-photo-badge">
                            <i class="fa-solid fa-code"></i> Full-Stack Dev
                        </div>
                    </div>
                    <div class="about-card-wrap">
                        <div class="about-card">
                            <div class="about-card-icon"><i class="fa-solid fa-code"></i></div>
                            <h3>Developer</h3>
                            <p>Building full-stack web applications with clean, efficient code and intuitive user experiences.</p>
                        </div>
                        <div class="about-card">
                            <div class="about-card-icon"><i class="fa-solid fa-film"></i></div>
                            <h3>Media Producer</h3>
                            <p>Experienced in audio/video production from professional film sets in Riyadh, KSA.</p>
                        </div>
                        <div class="about-card">
                            <div class="about-card-icon"><i class="fa-solid fa-headset"></i></div>
                            <h3>IT Support</h3>
                            <p>Google-certified technical support professional with strong troubleshooting skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section class="section section-dark" id="experience">
        <div class="container">
            <div class="section-label">02. Experience</div>
            <h2 class="section-title">Work History</h2>
            <div class="timeline">
                <?php foreach ($experience as $i => $exp): ?>
                <div class="timeline-item" data-index="<?= $i ?>">
                    <div class="timeline-dot <?= $exp['current'] ? 'active' : '' ?>"></div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-role"><?= htmlspecialchars($exp['role']) ?></h3>
                                <p class="timeline-company"><?= htmlspecialchars($exp['company']) ?></p>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-period <?= $exp['current'] ? 'current' : '' ?>">
                                    <?= $exp['current'] ? '<span class="pulse"></span>' : '' ?>
                                    <?= htmlspecialchars($exp['period']) ?>
                                </span>
                                <span class="timeline-location"><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($exp['location']) ?></span>
                            </div>
                        </div>
                        <ul class="timeline-bullets">
                            <?php foreach ($exp['bullets'] as $bullet): ?>
                            <li><?= $bullet ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-label">03. Projects</div>
            <h2 class="section-title">Featured Work</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $proj): ?>
                <div class="project-card">
                    <div class="project-icon-wrap">
                        <i class="fa-solid <?= $proj['icon'] ?>"></i>
                    </div>
                    <div class="project-content">
                        <h3><?= htmlspecialchars($proj['title']) ?></h3>
                        <p><?= htmlspecialchars($proj['description']) ?></p>
                        <div class="project-tags">
                            <?php foreach ($proj['tags'] as $tag): ?>
                            <span class="tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="project-footer">
                        <a href="<?= $proj['github'] ?>" target="_blank" class="project-link">
                            <i class="fa-brands fa-github"></i> View on GitHub
                        </a>
                        <i class="fa-solid fa-arrow-up-right-from-square project-arrow"></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section section-dark" id="skills">
        <div class="container">
            <div class="section-label">04. Skills</div>
            <h2 class="section-title">Expertise</h2>
            <div class="skills-wrapper">
                <div class="skills-technical">
                    <h3 class="skills-category-title"><i class="fa-solid fa-microchip"></i> Technical Skills</h3>
                    <div class="skill-bars">
                        <?php foreach ($skills['Technical'] as $skill): ?>
                        <div class="skill-bar-item">
                            <div class="skill-bar-label">
                                <span><?= htmlspecialchars($skill['name']) ?></span>
                                <span class="skill-pct"><?= $skill['level'] ?>%</span>
                            </div>
                            <div class="skill-bar-track">
                                <div class="skill-bar-fill" data-width="<?= $skill['level'] ?>"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="skills-right">
                    <div class="skills-lang-box">
                        <h3 class="skills-category-title"><i class="fa-solid fa-language"></i> Languages</h3>
                        <div class="pill-list">
                            <?php foreach ($skills['Languages'] as $lang): ?>
                            <span class="pill pill-lang"><?= htmlspecialchars($lang) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="skills-interest-box">
                        <h3 class="skills-category-title"><i class="fa-solid fa-star"></i> Interests</h3>
                        <div class="pill-list">
                            <?php foreach ($skills['Interests'] as $interest): ?>
                            <span class="pill pill-interest"><?= htmlspecialchars($interest) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="cert-box">
                        <h3 class="skills-category-title"><i class="fa-solid fa-award"></i> Certifications</h3>
                        <?php foreach ($certifications as $cert): ?>
                        <div class="cert-card">
                            <div class="cert-icon"><i class="fa-solid <?= $cert['icon'] ?>"></i></div>
                            <div>
                                <strong><?= htmlspecialchars($cert['title']) ?></strong>
                                <p><?= htmlspecialchars($cert['issuer']) ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EDUCATION -->
    <section class="section" id="education">
        <div class="container">
            <div class="section-label">05. Education</div>
            <h2 class="section-title">Academic Background</h2>
            <div class="education-grid">
                <?php foreach ($education as $edu): ?>
                <div class="edu-card">
                    <div class="edu-icon"><i class="fa-solid <?= $edu['icon'] ?>"></i></div>
                    <div class="edu-content">
                        <h3><?= htmlspecialchars($edu['school']) ?></h3>
                        <p class="edu-degree"><?= htmlspecialchars($edu['degree']) ?></p>
                        <div class="edu-meta">
                            <span><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($edu['location']) ?></span>
                            <span><i class="fa-solid fa-calendar"></i> <?= htmlspecialchars($edu['period']) ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>    <!-- GALLERY -->
    <!-- =====================================================
         GALLERY PHOTOS
    ====================================================== -->
    <section class="section" id="gallery">
        <div class="container">
            <div class="section-label">06. Gallery</div>
            <h2 class="section-title">Photos</h2>
            <div class="gallery-grid">
                <?php                $gallery = [
                    ['src' => 'assets/images/gallery-1.jpg', 'caption' => 'Photo 1'],
                    ['src' => 'assets/images/gallery-2.jpg', 'caption' => 'Photo 2'],
                    ['src' => 'assets/images/gallery-3.jpg', 'caption' => 'Photo 3'],
                ];
                foreach ($gallery as $i => $photo):
                ?>
                <div class="gallery-item" data-caption="<?= htmlspecialchars($photo['caption']) ?>">
                    <img
                        src="<?= htmlspecialchars($photo['src']) ?>"
                        alt="<?= htmlspecialchars($photo['caption']) ?>"
                        loading="lazy"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="gallery-placeholder">
                        <i class="fa-solid fa-image"></i>
                        <span>gallery-<?= $i + 1 ?>.jpg</span>
                    </div>
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>        </div>
    </section>

    <!-- CONTACT -->
    <section class="section section-dark" id="contact">
        <div class="container">
            <div class="section-label">07. Contact</div>
            <h2 class="section-title">Get In Touch</h2>
            <p class="contact-subtitle">Have a project in mind or want to collaborate? I'd love to hear from you.</p>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <a href="mailto:<?= $email ?>" class="contact-item">
                        <div class="contact-item-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <span class="contact-item-label">Email</span>
                            <span class="contact-item-value"><?= htmlspecialchars($email) ?></span>
                        </div>
                    </a>
                    <a href="tel:<?= $phone ?>" class="contact-item">
                        <div class="contact-item-icon"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <span class="contact-item-label">Phone</span>
                            <span class="contact-item-value"><?= htmlspecialchars($phone) ?></span>
                        </div>
                    </a>
                    <a href="https://github.com/nooniman" target="_blank" class="contact-item">
                        <div class="contact-item-icon"><i class="fa-brands fa-github"></i></div>
                        <div>
                            <span class="contact-item-label">GitHub</span>
                            <span class="contact-item-value">github.com/nooniman</span>
                        </div>
                    </a>
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <span class="contact-item-label">Location</span>
                            <span class="contact-item-value"><?= htmlspecialchars($location) ?></span>
                        </div>
                    </div>
                </div>
                <form class="contact-form" action="contact.php" method="POST">
                    <?php if ($flash): ?>
                    <div class="flash flash-<?= $flash['type'] ?>">
                        <i class="fa-solid <?= $flash['type'] === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation' ?>"></i>
                        <?= htmlspecialchars($flash['msg']) ?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="fname">Your Name</label>
                        <input type="text" id="fname" name="name" placeholder="John Doe" required />
                    </div>
                    <div class="form-group">
                        <label for="femail">Your Email</label>
                        <input type="email" id="femail" name="email" placeholder="john@example.com" required />
                    </div>
                    <div class="form-group">
                        <label for="fsubject">Subject</label>
                        <input type="text" id="fsubject" name="subject" placeholder="Project Inquiry" required />
                    </div>
                    <div class="form-group">
                        <label for="fmessage">Message</label>
                        <textarea id="fmessage" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        Send Message <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <span class="footer-logo">NAS<span>.</span></span>
                <p>Designed &amp; Built by <?= htmlspecialchars($name) ?> &copy; <?= date('Y') ?></p>
                <div class="footer-socials">
                    <a href="mailto:<?= $email ?>"><i class="fa-solid fa-envelope"></i></a>
                    <a href="https://github.com/nooniman" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="lightboxClose"><i class="fa-solid fa-xmark"></i></button>
        <button class="lightbox-prev" id="lightboxPrev"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="lightbox-next" id="lightboxNext"><i class="fa-solid fa-chevron-right"></i></button>
        <div class="lightbox-img-wrap">
            <img src="" alt="" id="lightboxImg" />
            <p class="lightbox-caption" id="lightboxCaption"></p>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
