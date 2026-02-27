<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insight for Development | I4D Malawi</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --emerald: #006837;
            --olive: #8CC63F;
            --lime: #39B54A;
            --soft-green: #eef7f2;
            --dark: #002e18;
            --slate: #475569;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        body { 
            background: linear-gradient(135deg, #f0f9f4 0%, #dcfce7 100%);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden; /* Critical for mobile overflow */
            width: 100%;
        }

/* --- Professional Navigation --- */
nav { 
    position: absolute; 
    top: 0; 
    width: 100%; 
    padding: 20px 8%; 
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    z-index: 100; 
    background: transparent;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.nav-links { 
    display: flex; 
    gap: 30px; 
    align-items: center; 
    font-weight: 600; 
    font-size: 0.9rem; 
}

.nav-links a { 
    text-decoration: none; 
    color: var(--dark); 
    transition: color 0.3s ease;
}

.nav-links a:hover { color: var(--emerald); }

/* Donate Button Style */
.nav-donate {
    background: var(--emerald);
    color: white !important;
    padding: 10px 22px;
    border-radius: 8px;
    font-weight: 700;
    box-shadow: 0 4px 12px rgba(0, 104, 55, 0.15);
}

/* Mobile Toggle - Hidden by default */
.menu-toggle {
    display: none;
    cursor: pointer;
    color: var(--emerald);
}

@media (max-width: 768px) {
    .menu-toggle { display: block; }
    
    .nav-links {
        display: none; /* Hide links on mobile */
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        padding: 20px;
        gap: 15px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .nav-links.active { display: flex; }
}

        /* --- Hero Section --- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 100px 8% 50px;
            gap: 40px;
        }

        .hero-content { z-index: 2; }

        .hero-image-container {
            width: 100%;
            height: 500px;
            background: url('images/aaron.jpg') center;
            background-size: cover;
            border-radius: 300px 5px 5px 300px; /* Modernized the curve for better scaling */
            box-shadow: -20px 20px 60px rgba(0,0,0,0.1);
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem); /* Fluid typography */
            color: var(--emerald);
            line-height: 1.1;
            margin-bottom: 24px;
            font-weight: 800;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--slate);
            max-width: 500px;
            margin-bottom: 30px;
        }

        .btn-group { display: flex; gap: 12px; flex-wrap: wrap; }
        .btn-primary, .btn-secondary { 
            padding: 14px 24px; border-radius: 8px; text-decoration: none; 
            font-weight: 700; transition: 0.3s; display: inline-block;
            text-align: center;
        }
        .btn-primary { background: var(--lime); color: white; }
        .btn-secondary { border: 2px solid var(--emerald); color: var(--emerald); }

        /* --- Global Sections --- */
        section { padding: 80px 8%; width: 100%; }
        .section-title { color: var(--emerald); font-size: 2.2rem; margin-bottom: 40px; }

        /* --- Thematic Grid --- */
        .thematic-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .theme-card {
            background: white; padding: 30px; border-radius: 20px;
            border: 1px solid var(--olive);
            height: 100%;
        }

        /* --- Governance & Lists --- */
        .gov-container {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px; background: white; border-radius: 30px; padding: 40px;
        }

        .value-strip {
            display: flex; flex-wrap: wrap; justify-content: center;
            background: var(--emerald); color: white;
            padding: 20px; gap: 20px; font-weight: 700; font-size: 0.8rem;
        }

        .contact-footer {
            background: var(--dark); color: white;
            padding: 60px 8% 30px; border-radius: 40px 40px 0 0;
        }

        .contact-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 20px; margin-top: 40px; 
        }

        .contact-box {
            background: rgba(255,255,255,0.05); padding: 20px;
            border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);
            word-wrap: break-word; /* Prevents long emails from breaking container */
        }

        /* --- MOBILE RESTRUCTURING --- */
        @media (max-width: 900px) {
            nav { padding: 20px 5%; }
            .nav-links { display: none; } /* Hide desktop nav */
            
            .hero { 
                grid-template-columns: 1fr; 
                text-align: center; 
                padding-top: 120px;
            }
            .hero-content { order: 1; }
            .hero-image-container { 
                order: 2; height: 300px; 
                width: 100%; border-radius: 40px; 
            }
            .btn-group { justify-content: center; }
            .btn-primary, .btn-secondary { width: 100%; } /* Stack buttons on mobile */
            
            section { padding: 60px 5%; }
            .gov-container { padding: 20px; }
            
            .footer-info { 
                flex-direction: column; 
                text-align: center; 
                gap: 15px; 
            }
        }

        @media (max-width: 480px) {
            .section-title { font-size: 1.8rem; }
            .theme-card { padding: 20px; }
        }
        
        
        @media (max-width: 768px) {
    .stakeholder-section {
        padding: 60px 5% !important; /* Reduce padding on mobile */
    }

    .responsive-grid {
        grid-template-columns: 1fr !important; /* Stack columns vertically */
        gap: 40px !important;
    }

    .stakeholder-list {
        grid-template-columns: 1fr !important; /* One stakeholder per line on small screens */
    }

    .column h3 {
        margin-bottom: 20px !important;
        font-size: 1.2rem;
    }
}


/* Mobile Responsive Adjustments */
@media (max-width: 768px) {
    #contact {
        padding: 60px 5% !important;
    }
    
    .form-grid {
        grid-template-columns: 1fr !important; /* Stack inputs vertically */
        gap: 15px !important;
    }

    #contact h2 {
        font-size: 2rem !important;
    }
    
    footer .footer-content {
        flex-direction: column !important;
        text-align: center !important;
        gap: 30px !important;
    }
}

/* Hover effects for buttons */
button[type="submit"]:hover {
    background: #8CC63F !important;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}



/* Footer Mobile Responsiveness */
@media (max-width: 768px) {
    footer {
        padding: 40px 5% 20px !important;
        text-align: center !important; /* Centers headings and text for mobile balance */
    }

    .footer-content {
        flex-direction: column !important;
        align-items: center !important;
        gap: 30px !important;
    }

    /* Centers the social icon flex container */
    .footer-content div[style*="flex: 1"] {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 100% !important;
    }

    /* Adjusts the bottom bar (Copyright & Links) */
    footer div[style*="border-top"] {
        flex-direction: column !important;
        align-items: center !important;
        gap: 15px !important;
        text-align: center;
    }
}
    </style>
</head>
<body>

<nav>
    <div style="font-weight: 800; font-size: 1.4rem; color: var(--emerald); display: flex; align-items: center; gap: 8px; letter-spacing: -0.5px;">
        <i data-lucide="sprout"></i> I4D
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">
        <i data-lucide="menu" size="28"></i>
    </div>

    <div class="nav-links" id="navLinks">
        <a href="#about">About</a>
        <a href="#thematic">Impact</a>
        <a href="#governance">Governance</a>
        <a href="#contact">Contact</a>
        <a href="#donate" class="nav-donate">Donate</a>
    </div>
</nav>

    <section class="hero">
        <div class="hero-content">
            <span style="letter-spacing: 2px; font-weight: 800; color: var(--lime); font-size: 0.75rem; text-transform: uppercase; display: block; margin-bottom: 10px;">Insight for Development</span>
            <h1>Climate Action.<br><span style="color: var(--olive)">Social Justice.</span></h1>
            <p>A Malawi-registered nonprofit advancing climate action, environmental restoration, and inclusive agribusiness.</p>
            <div class="btn-group">
                <a href="mailto:write2suneeta@gmail.com" class="btn-primary">Contact CEO</a>
                <a href="Insight for  Development (I4D) Organisational Profile.pdf" class="btn-secondary">Download Profile</a>
            </div>
        </div>
        <div class="hero-image-container"></div>
    </section>

    <div class="value-strip">
        <span>EQUITY</span> <span>STEWARDSHIP</span> <span>INTEGRITY</span> <span>COMMUNITY</span> <span>INNOVATION</span>
    </div>

<section id="about" style="position: relative; overflow: hidden; padding: 60px 8%; margin-bottom:3px;">
    <div style="position: absolute; top: -10%; left: -5%; width: 300px; height: 300px; background: var(--olive); opacity: 0.05; border-radius: 50%; z-index: 0;"></div>

    <div class="thematic-grid" style="margin-bottom: 40px; position: relative; z-index: 1;">
        
        <div style="grid-column: 1 / -1; display: flex; flex-wrap: wrap; align-items: flex-start; justify-content: space-between; gap: 30px; margin-bottom: 40px;">
            <div style="flex: 1; min-width: 300px;">
                <h2 class="section-title" style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                    Organisational Overview
                </h2>
                <p style="font-size: 1.1rem; color: var(--slate); max-width: 600px; margin-bottom: 20px;">
                    We integrate <b>carbon finance</b> with community-led development to deliver measurable environmental and social outcomes across Malawi.
                </p>
            </div>

            
        </div>

        <div style="background: var(--emerald); color: white; padding: 40px; border-radius: 32px; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(0,104,55,0.2);">
            <i data-lucide="eye" style="position: absolute; right: -20px; top: -20px; width: 150px; height: 150px; opacity: 0.1; transform: rotate(-15deg);"></i>
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                <div style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 12px;">
                    <i data-lucide="sparkles" size="24"></i>
                </div>
                <h3 style="font-size: 1.5rem; letter-spacing: 1px;">Our Vision</h3>
            </div>
            <p style="font-size: 1.25rem; font-style: italic; font-weight: 500; line-height: 1.5; position: relative; z-index: 1;">
                "Thriving, resilient, and equitable communities living in harmony with a restored environment."
            </p>
        </div>

        <div style="background: white; padding: 40px; border-radius: 32px; border: 1px solid rgba(0,104,55,0.1); position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 25px;">
                <div style="background: var(--soft-green); padding: 8px; border-radius: 12px;">
                    <i data-lucide="target" size="24" style="color: var(--emerald);"></i>
                </div>
                <h3 style="color: var(--emerald); font-size: 1.5rem; letter-spacing: 1px;">Our Mission</h3>
            </div>
            <p style="color: var(--slate); margin-bottom: 25px;">To catalyze inclusive development by linking three strategic pillars:</p>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                <span style="background: var(--soft-green); color: var(--emerald); padding: 6px 14px; border-radius: 100px; font-size: 0.8rem; font-weight: 700; border: 1px solid rgba(0,104,55,0.1);">Carbon Markets</span>
                <span style="background: #fef9c3; color: #854d0e; padding: 6px 14px; border-radius: 100px; font-size: 0.8rem; font-weight: 700; border: 1px solid rgba(133,77,14,0.1);">Restoration</span>
                <span style="background: #dcfce7; color: #166534; padding: 6px 14px; border-radius: 100px; font-size: 0.8rem; font-weight: 700; border: 1px solid rgba(22,101,52,0.1);">Value Chains</span>
            </div>
        </div>
        <div class="container" style="display: flex; gap: 2px; flex-shrink: 0;">
                <div style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?auto=format&fit=crop&q=80&w=150&h=150" 
                         alt="Carbon Markets" 
                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 16px; border: 3px solid white; box-shadow: 0 10px 15px rgba(0,0,0,0.05);">
                    <p style="font-size: 0.7rem; font-weight: 700; margin-top: 8px; color: var(--emerald);"></p>
                </div>
                <div style="text-align: center;">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&q=80&w=150&h=150" 
                         alt="Restoration" 
                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 16px; border: 3px solid white; box-shadow: 0 10px 15px rgba(0,0,0,0.05);">
                    <p style="font-size: 0.7rem; font-weight: 700; margin-top: 8px; color: var(--emerald);"></p>
                </div>
                <div style="text-align: center;">
                    <img src="images/tsh.jpg" 
                         alt="Value Chains" 
                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 16px; border: 3px solid white; box-shadow: 0 10px 15px rgba(0,0,0,0.05);">
                    <p style="font-size: 0.7rem; font-weight: 700; margin-top: 8px; color: var(--emerald);"></p>
                </div>
            </div>
    </div>
</section>


   <section id="thematic" style="background: #f8fafc; padding: 80px 8%;">
    <div style="margin-bottom: 50px; text-align: left;">
        <h2 class="section-title">Strategic Thematic Areas</h2>
        <p style="color: var(--slate);  margin: 0 auto; text-align: left;">Our integrated approach addresses the complex intersections of climate, economy, and social equity in Malawi.</p>
    </div>

    <div class="thematic-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="cloud-lightning" style="color: var(--emerald);" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Carbon Markets & Climate Finance</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">High-integrity carbon projects with strong community co-benefits.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Improved cookstoves</li>
                <li style="margin-bottom: 5px;">• Digital MRV systems</li>
                <li>• Voluntary market linkages</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="trees" style="color: var(--lime);" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Restoration & Conservation</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Reforestation and soil regeneration to restore Malawi's landscapes.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Watershed restoration</li>
                <li style="margin-bottom: 5px;">• Sustainable land management</li>
                <li>• Community-led conservation</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="sun" style="color: #fbbf24;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Sunflower Agribusiness</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Strengthening incomes through structured sunflower off-taking.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Farmer aggregation</li>
                <li style="margin-bottom: 5px;">• Fair pricing mechanisms</li>
                <li>• Climate-smart training</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); ">
            <i data-lucide="droplets" style="color: #3b82f6;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">WASH</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Resilient water supply and hygiene behavior change programs.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Safe water supply systems</li>
                <li style="margin-bottom: 5px;">• Resilient sanitation</li>
                <li>• School & Health WASH</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="users" style="color: #8b5cf6;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Gender Equality</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Economic empowerment and gender-responsive climate action.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Women's leadership</li>
                <li style="margin-bottom: 5px;">• GBV prevention</li>
                <li>• Economic empowerment</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="graduation-cap" style="color: #ef4444;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Ending Child Marriage</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Community dialogue and educational support for girls.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Social norm change</li>
                <li style="margin-bottom: 5px;">• Life-skills programmes</li>
                <li>• Traditional leader engagement</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="utensils" style="color: #f97316;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Food & Nutrition</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Strengthening household food systems and nutrition education.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Diversified agriculture</li>
                <li style="margin-bottom: 5px;">• Post-harvest handling</li>
                <li>• Nutrition education</li>
            </ul>
        </div>

        <div class="theme-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <i data-lucide="heart-handshake" style="color: #64748b;" size="32"></i>
            <h3 style="margin: 15px 0; font-size: 1.2rem; color: var(--dark);">Street-Connected Children</h3>
            <p style="font-size: 0.85rem; color: var(--slate); margin-bottom: 12px; line-height: 1.4;">Safeguarding, reintegration, and vocational pathways.</p>
            <ul style="list-style: none; font-size: 0.85rem; color: var(--slate); padding: 0;">
                <li style="margin-bottom: 5px;">• Psychosocial support</li>
                <li style="margin-bottom: 5px;">• Vocational pathways</li>
                <li>• Family reintegration</li>
            </ul>
        </div>

    </div>
</section>


<section id="approaches" style="padding: 100px 8%; background: #ffffff; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; right: 0; width: 700px; height: 700px; background: radial-gradient(circle, rgba(140,198,63,0.05) 0%, rgba(255,255,255,0) 70%); z-index: 0;"></div>
    <div style="position: absolute; top: 0; right: 0; width: 400px; height: 400px; background: radial-gradient(circle, rgba(140,198,63,0.05) 0%, rgba(255,255,255,0) 70%); z-index: 0;"></div>
    <div style="position: absolute; bottom: 0; left: 0; width: 400px; height: 400px; background: radial-gradient(circle, rgba(140,198,63,0.05) 0%, rgba(255,255,255,0) 70%); z-index: 0;"></div>

    <div style="position: relative; z-index: 1;">
        <div style="margin-bottom: 60px;">
            <span style="color: #39B54A; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Methodology</span>
            <h2 class="section-title" style="color: #006837; margin-top: 10px; font-size: 1.7rem;">Cross-Cutting Approaches</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            
            <div class="approach-card" style="padding: 40px; border-radius: 24px; background: #fafafa; border: 1px solid #eee; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden;">
                <div style="width: 60px; height: 60px; background: rgba(0, 104, 55, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <i data-lucide="users-round" style="color: #006837;" size="28"></i>
                </div>
                <h4 style="color: #006837; font-size: 1.25rem; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">Community-led development</h4>
                <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin: 0;">Empowering local structures to foster genuine project ownership and long-term environmental sustainability.</p>
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: #8CC63F;"></div>
            </div>

            <div class="approach-card" style="padding: 40px; border-radius: 24px; background: #fafafa; border: 1px solid #eee; transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="width: 60px; height: 60px; background: rgba(57, 181, 74, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <i data-lucide="trending-up" style="color: #39B54A;" size="28"></i>
                </div>
                <h4 style="color: #006837; font-size: 1.25rem; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">Market-based & Private-sector engagement</h4>
                <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin: 0;">Aligning conservation goals with commercial value chains to create self-sustaining economic incentives.</p>
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: #39B54A;"></div>
            </div>

            <div class="approach-card" style="padding: 40px; border-radius: 24px; background: #fafafa; border: 1px solid #eee; transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="width: 60px; height: 60px; background: rgba(140, 198, 63, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <i data-lucide="cpu" style="color: #8CC63F;" size="28"></i>
                </div>
                <h4 style="color: #006837; font-size: 1.25rem; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">Digital monitoring & learning</h4>
                <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin: 0;">Leveraging advanced MRV systems and real-time data for radical transparency and adaptive project management.</p>
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: #006837;"></div>
            </div>

            <div class="approach-card" style="padding: 40px; border-radius: 24px; background: #fafafa; border: 1px solid #eee; transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="width: 60px; height: 60px; background: rgba(0, 104, 55, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <i data-lucide="shield-check" style="color: #006837;" size="28"></i>
                </div>
                <h4 style="color: #006837; font-size: 1.25rem; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">Safeguarding & Do-No-Harm</h4>
                <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin: 0;">Maintaining rigorous child protection and ethical standards that go beyond compliance to ensure community safety.</p>
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: #8CC63F;"></div>
            </div>

            <div class="approach-card" style="padding: 40px; border-radius: 24px; background: #fafafa; border: 1px solid #eee; transition: all 0.4s ease; position: relative; overflow: hidden;">
                <div style="width: 60px; height: 60px; background: rgba(57, 181, 74, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <i data-lucide="sparkles" style="color: #39B54A;" size="28"></i>
                </div>
                <h4 style="color: #006837; font-size: 1.25rem; font-weight: 700; margin-bottom: 15px; line-height: 1.3;">Inclusion Mainstreaming</h4>
                <p style="color: #64748b; font-size: 1rem; line-height: 1.6; margin: 0;">Proactively integrating gender equity and social inclusion into the architectural core of every intervention.</p>
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: #39B54A;"></div>
            </div>
        </div>
    </div>
</section>

<section id="governance" style="padding: 100px 8%; background: #fcfdfc; border-bottom: 1px solid #eee;">
    <div style="text-align: left; margin-bottom: 60px;">
        <span style="color: #39B54A; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Leadership</span>
        <h2 class="section-title" style="color: #006837; margin-top: 10px;">Governance Structure</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
        <div style="background: white; padding: 40px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #f0f0f0;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                <div style="background: #006837; padding: 10px; border-radius: 12px; color: white;"><i data-lucide="award"></i></div>
                <h3 style="color: #006837; margin: 0;">Board of Directors</h3>
            </div>
            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 20px;">Independent oversight responsible for strategic guidance and fiduciary accountability.</p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-weight: 600; color: #334155; font-size: 0.85rem;">
                <div style="padding: 8px 12px; background: #f8fafc; border-radius: 8px;">Chairperson</div>
                <div style="padding: 8px 12px; background: #f8fafc; border-radius: 8px;">Vice Chair</div>
                <div style="padding: 8px 12px; background: #f8fafc; border-radius: 8px;">Treasurer</div>
                <div style="padding: 8px 12px; background: #f8fafc; border-radius: 8px;">Secretary</div>
            </div>
            <h4 style="font-size: 0.8rem; text-transform: uppercase; color: #8CC63F; margin-top: 25px; letter-spacing: 1px;">Board Committees</h4>
            <ul style="list-style: none; padding: 0; font-size: 0.85rem; color: #64748b; margin-top: 10px;">
                <li style="margin-bottom: 8px;"><i data-lucide="check-circle" size="14" style="color: #39B54A; margin-right: 8px;"></i> Finance and Audit</li>
                <li style="margin-bottom: 8px;"><i data-lucide="check-circle" size="14" style="color: #39B54A; margin-right: 8px;"></i> Programmes and Impact</li>
                <li><i data-lucide="check-circle" size="14" style="color: #39B54A; margin-right: 8px;"></i> Safeguarding and Ethics</li>
            </ul>
        </div>

        <div style="background: white; padding: 40px; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #f0f0f0;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                <div style="background: #8CC63F; padding: 10px; border-radius: 12px; color: white;"><i data-lucide="briefcase"></i></div>
                <h3 style="color: #006837; margin: 0;">Management</h3>
            </div>
            <div style=" padding-left: 20px; margin-left: 10px;">
                <div style="margin-bottom: 15px;">
                    <strong style="display: block; color: #006837; font-size: 1rem;">Executive Director</strong>
                    <span style="font-size: 0.8rem; color: #64748b;">Strategy & External Relations</span>
                </div>
                <div style="margin-bottom: 15px;">
                    <strong style="display: block; color: #334155;">Programmes Manager</strong>
                    <span style="font-size: 0.8rem; color: #64748b;">Implementation & Operations</span>
                </div>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 20px;">
                    <span style="background: #f1f5f9; padding: 5px 12px; border-radius: 6px; font-size: 0.75rem; color: #475569; font-weight: 600;">Carbon & Climate Lead</span>
                    <span style="background: #f1f5f9; padding: 5px 12px; border-radius: 6px; font-size: 0.75rem; color: #475569; font-weight: 600;">Agribusiness Lead</span>
                    <span style="background: #f1f5f9; padding: 5px 12px; border-radius: 6px; font-size: 0.75rem; color: #475569; font-weight: 600;">Finance & Admin</span>
                    <span style="background: #f1f5f9; padding: 5px 12px; border-radius: 6px; font-size: 0.75rem; color: #475569; font-weight: 600;">MEL Officer</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 100px 8%; background: #006837; color: white;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px; align-items: center;">
        <div>
            <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Monitoring, Evaluation & Learning</h2>
            <p style="opacity: 0.9; line-height: 1.8; margin-bottom: 30px;">Our results-based M&E system is aligned with national frameworks and international carbon standards, utilizing digital IoT and mobile tools for real-time impact tracking.</p>
            <div style="display: flex; gap: 20px;">
                <div style="text-align: center;">
                    <h4 style="font-size: 1.5rem; margin: 0; color: #8CC63F;">100%</h4>
                    <span style="font-size: 0.75rem; opacity: 0.8;">Digital Data</span>
                </div>
                <div style="width: 1px; background: rgba(255,255,255,0.2);"></div>
                <div style="text-align: center;">
                    <h4 style="font-size: 1.5rem; margin: 0; color: #8CC63F;">MRV</h4>
                    <span style="font-size: 0.75rem; opacity: 0.8;">Verified Systems</span>
                </div>
            </div>
        </div>
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 40px; border-radius: 32px; border: 1px solid rgba(255,255,255,0.2);">
            <h4 style="margin-bottom: 20px; color: #8CC63F; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Framework Key Elements</h4>
            <ul style="list-style: none; padding: 0; line-height: 2; font-size: 0.95rem;">
                <li style="border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; margin-bottom: 10px;">• Theory of Change & Results Frameworks</li>
                <li style="border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; margin-bottom: 10px;">• Baseline, Midline & End-line Assessments</li>
                <li style="border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px; margin-bottom: 10px;">• Gender & Child-Sensitive Indicators</li>
                <li>• Quarterly/Annual Performance Reviews</li>
            </ul>
        </div>
    </div>
</section>

<section class="stakeholder-section" style="padding: 100px 8%; background: white;">
    <div class="responsive-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
        <div class="column">
            <h3 style="color: #006837; margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                <i data-lucide="target" style="color: #39B54A;"></i> Target Beneficiaries
            </h3>
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div style="padding: 15px 20px; background: #fdfdfd; border: 1px solid #f0f0f0; border-radius: 12px; font-weight: 600; color: #334155; font-size: 0.9rem;">Smallholder Farmers (Women & Youth)</div>
                <div style="padding: 15px 20px; background: #fdfdfd; border: 1px solid #f0f0f0; border-radius: 12px; font-weight: 600; color: #334155; font-size: 0.9rem;">Climate-vulnerable rural households</div>
                <div style="padding: 15px 20px; background: #fdfdfd; border: 1px solid #f0f0f0; border-radius: 12px; font-weight: 600; color: #334155; font-size: 0.9rem;">Girls at risk & Street-connected children</div>
            </div>
        </div>
        <div class="column">
            <h3 style="color: #006837; margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                <i data-lucide="handshake" style="color: #39B54A;"></i> Key Stakeholders
            </h3>
            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 20px;">We collaborate with Government ministries, Carbon buyers, NGOs, and traditional leaders.</p>
            <div class="stakeholder-list" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                <span style="color: #006837; font-size: 0.85rem; font-weight: 700;">• Local Authorities</span>
                <span style="color: #006837; font-size: 0.85rem; font-weight: 700;">• Agribusinesses</span>
                <span style="color: #006837; font-size: 0.85rem; font-weight: 700;">• Climate Finance Inst.</span>
                <span style="color: #006837; font-size: 0.85rem; font-weight: 700;">• Faith-based Org.</span>
            </div>
        </div>
    </div>
</section>

<section id="sustainability" style="padding: 80px 8%; background: #f1f8f4;">
    <div style="background: white; padding: 50px; border-radius: 32px; box-shadow: 0 20px 40px rgba(0,0,0,0.03); ">
        
        <div style="margin-bottom: 40px;  padding-left: 20px;">
            <h3 style="color: #006837; font-size: 1.8rem; margin: 0; letter-spacing: -0.5px;">Sustainability & Resource Mobilisation</h3>
            <p style="color: #64748b; font-size: 1rem; margin-top: 10px; max-width: 600px;">
                I4D ensures long-term impact by diversifying revenue streams and strengthening the local ecosystem.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            
            <div style="padding: 25px; background: #f8fafc; border-radius: 20px; transition: transform 0.3s ease; border: 1px solid #edf2f7;">
                <div style="width: 45px; height: 45px; background: rgba(0, 104, 55, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                    <i data-lucide="banknote" style="color: #006837;" size="24"></i>
                </div>
                <h4 style="font-size: 0.95rem; font-weight: 800; color: #006837; margin-bottom: 8px;">Carbon Finance</h4>
                <p style="font-size: 0.8rem; color: #64748b; line-height: 1.5; margin: 0;">Results-based funding through verified emission reductions.</p>
            </div>

            <div style="padding: 25px; background: #f8fafc; border-radius: 20px; transition: transform 0.3s ease; border: 1px solid #edf2f7;">
                <div style="width: 45px; height: 45px; background: rgba(57, 181, 74, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                    <i data-lucide="trending-up" style="color: #39B54A;" size="24"></i>
                </div>
                <h4 style="font-size: 0.95rem; font-weight: 800; color: #006837; margin-bottom: 8px;">Agribusiness</h4>
                <p style="font-size: 0.8rem; color: #64748b; line-height: 1.5; margin: 0;">Sustainable revenue generated via structured off-taker value chains.</p>
            </div>

            <div style="padding: 25px; background: #f8fafc; border-radius: 20px; transition: transform 0.3s ease; border: 1px solid #edf2f7;">
                <div style="width: 45px; height: 45px; background: rgba(140, 198, 63, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                    <i data-lucide="handshake" style="color: #8CC63F;" size="24"></i>
                </div>
                <h4 style="font-size: 0.95rem; font-weight: 800; color: #006837; margin-bottom: 8px;">Donor Partnerships</h4>
                <p style="font-size: 0.8rem; color: #64748b; line-height: 1.5; margin: 0;">Strategic collaboration with global development institutions.</p>
            </div>

            <div style="padding: 25px; background: #f8fafc; border-radius: 20px; transition: transform 0.3s ease; border: 1px solid #edf2f7;">
                <div style="width: 45px; height: 45px; background: rgba(0, 104, 55, 0.05); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                    <i data-lucide="shrub" style="color: #006837;" size="24"></i>
                </div>
                <h4 style="font-size: 0.95rem; font-weight: 800; color: #006837; margin-bottom: 8px;">Local Capacity</h4>
                <p style="font-size: 0.8rem; color: #64748b; line-height: 1.5; margin: 0;">Empowering local institutions to maintain and scale interventions.</p>
            </div>

        </div>
    </div>
</section>

<section id="contact" style="padding: 100px 8%; background: #006837; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -10%; right: -5%; width: 400px; height: 400px; background: rgba(140, 198, 63, 0.1); filter: blur(80px); border-radius: 50%;"></div>

    <div style="position: relative; z-index: 1; max-width: 900px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Get in Touch</h2>
            <p style="color: rgba(255,255,255,0.8);">Have a question or want to support our mission? Send us a message.</p>
        </div>

        <form action="send-email.php" method="POST" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(15px); padding: 40px; border-radius: 32px; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 25px 50px rgba(0,0,0,0.2);">
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;" class="form-grid">
        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Full Name</label>
            <input type="text" name="full_name" placeholder="John Doe" required style="padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837;">
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Email Address</label>
            <input type="email" name="email" placeholder="john@example.com" required style="padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837;">
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Phone Number</label>
            <input type="tel" name="phone" placeholder="+265..." style="padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837;">
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Country</label>
            <input type="text" name="country" placeholder="Malawi" required style="padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837;">
        </div>
    </div>

    <div style="margin-bottom: 25px;">
        <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: block; margin-bottom: 12px;">Enquiry Type</label>
        <select name="enquiry_type" style="width: 100%; padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837; font-weight: 600;">
            <option value="General Contact">General Contact</option>
            <option value="Donate">Donation Enquiry</option>
            <option value="Feedback">Feedback</option>
        </select>
    </div>

    <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 30px;">
        <label style="color: #8CC63F; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Your Message</label>
        <textarea name="message" rows="4" placeholder="How can we help you?" required style="padding: 14px; border-radius: 12px; border: none; background: rgba(255,255,255,0.9); color: #006837; resize: none;"></textarea>
    </div>

    <button type="submit" style="width: 100%; background: #39B54A; color: white; padding: 18px; border-radius: 12px; border: none; font-weight: 800; font-size: 1rem; cursor: pointer; transition: 0.3s;">
        Send Message
    </button>
</form>
    </div>
</section>
    
<footer style="background: #ffffff; padding: 60px 8% 30px; border-top: 1px solid #eee; text-align:left;">
    <div class="footer-content" style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 40px; margin-bottom: 40px;">
        
        <div style="flex: 1; min-width: 250px;">
            <h3 style="color: #006837; margin: 0 0 15px 0; font-size: 1.5rem;">I4D</h3>
            <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; max-width: 300px;">
                Empowering communities through sustainable agribusiness, climate resilience, and inclusive development.
            </p>
        </div>

        <div style="flex: 1; min-width: 150px;">
            <h4 style="color: #334155; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Organization</h4>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem; line-height: 2;">
                <li><a href="#approaches" style="color: #64748b; text-decoration: none;">Our Approach</a></li>
                <li><a href="#governance" style="color: #64748b; text-decoration: none;">Governance</a></li>
                <li><a href="#sustainability" style="color: #64748b; text-decoration: none;">Sustainability</a></li>
            </ul>
        </div>

        <div style="flex: 1; min-width: 200px;">
            <h4 style="color: #334155; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">Connect With Us</h4>
            <div style="display: flex; gap: 15px;">
                <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #f1f8f4; color: #006837; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='#39B54A'; this.style.color='#fff'" onmouseout="this.style.background='#f1f8f4'; this.style.color='#006837'">
                    <i data-lucide="facebook" size="18"></i>
                </a>
                <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #f1f8f4; color: #006837; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='#39B54A'; this.style.color='#fff'" onmouseout="this.style.background='#f1f8f4'; this.style.color='#006837'">
                    <i data-lucide="twitter" size="18"></i>
                </a>
                <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #f1f8f4; color: #006837; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='#39B54A'; this.style.color='#fff'" onmouseout="this.style.background='#f1f8f4'; this.style.color='#006837'">
                    <i data-lucide="linkedin" size="18"></i>
                </a>
                <a href="#" style="width: 40px; height: 40px; border-radius: 50%; background: #f1f8f4; color: #006837; display: flex; align-items: center; justify-content: center; transition: 0.3s;" onmouseover="this.style.background='#39B54A'; this.style.color='#fff'" onmouseout="this.style.background='#f1f8f4'; this.style.color='#006837'">
                    <i data-lucide="instagram" size="18"></i>
                </a>
            </div>
        </div>
    </div>

    <div style="border-top: 1px solid #eee; padding-top: 30px; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; font-size: 0.8rem; color: #94a3b8;">
        <p>© 2026 Insight for Development (I4D). All rights reserved. Developed by <a href="https://imperialsystemsmw.com/">Imperial Systems</a> in Collaboration with <a href="https://beleae.com/">Belea Enterprise</a></p>
        <div style="display: flex; gap: 20px;">
            <a href="#" style="color: #94a3b8; text-decoration: none;">Privacy Policy</a>
            <a href="#" style="color: #94a3b8; text-decoration: none;">Terms of Service</a>
        </div>
    </div>
</footer>






    <script>
        lucide.createIcons();
        
    function toggleMenu() {
        const navLinks = document.getElementById('navLinks');
        navLinks.classList.toggle('active');
        
        // Optional: Change icon from 'menu' to 'x' when open
        const menuIcon = document.querySelector('.menu-toggle i');
        if (navLinks.classList.contains('active')) {
            menuIcon.setAttribute('data-lucide', 'x');
        } else {
            menuIcon.setAttribute('data-lucide', 'menu');
        }
        lucide.createIcons(); // Refresh icons
    }
    
    
        window.addEventListener('load', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const toast = document.getElementById('toast-notification');
        const message = document.getElementById('toast-message');
        const icon = document.getElementById('toast-icon');

        if (status) {
            toast.style.display = 'flex';
            
            if (status === 'success') {
                toast.style.background = '#006837'; // Emerald
                message.innerText = 'Message sent successfully!';
                icon.setAttribute('data-lucide', 'check-circle');
            } else {
                toast.style.background = '#ef4444'; // Red
                message.innerText = 'Failed to send message. Please try again.';
                icon.setAttribute('data-lucide', 'alert-circle');
            }
            
            // Refresh Lucide icons inside the toast
            lucide.createIcons();

            // Animate In
            setTimeout(() => {
                toast.style.transform = 'translateY(0)';
            }, 100);

            // Animate Out after 5 seconds
            setTimeout(() => {
                toast.style.transform = 'translateY(100px)';
                setTimeout(() => { toast.style.display = 'none'; }, 500);
                
                // Clean URL parameters without refreshing
                const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                window.history.replaceState({path:cleanUrl}, '', cleanUrl);
            }, 5000);
        }
    });

    </script>
    
    <div id="toast-notification" style="
    position: fixed; 
    bottom: 30px; 
    right: 30px; 
    padding: 16px 24px; 
    border-radius: 12px; 
    display: none; 
    align-items: center; 
    gap: 12px; 
    z-index: 1000; 
    box-shadow: 0 10px 25px rgba(0,0,0,0.15); 
    color: white; 
    font-weight: 600; 
    transition: all 0.5s ease;
    transform: translateY(100px);
">
    <i id="toast-icon" data-lucide="info" size="20"></i>
    <span id="toast-message"></span>
</div>
</body>

</html>
