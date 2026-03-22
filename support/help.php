<?php
/**
 * Nexhop Support - Help & Documentation
 */
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & How It Works | <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo url('/assets/css/style.css?v=1.1'); ?>">
    <style>
        .help-hero {
            text-align: center;
            padding: 48px 20px 40px;
        }
        .help-hero h1 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 12px;
        }
        .help-hero p {
            font-size: 16px;
            color: var(--text-muted);
            max-width: 560px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Steps */
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        .step-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-100);
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            text-align: center;
            position: relative;
            transition: all var(--transition);
        }
        .step-card:hover {
            border-color: var(--border-200);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }
        .step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: #fff;
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }
        .step-card h3 {
            font-size: 15px;
            margin-bottom: 8px;
        }
        .step-card p {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Info sections */
        .help-section {
            margin-bottom: 32px;
        }
        .help-section-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .help-section-title .icon {
            width: 36px;
            height: 36px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        /* Info table inside cards */
        .info-table {
            width: 100%;
        }
        .info-table td {
            padding: 14px 20px;
            border-bottom: 1px solid var(--border-100);
            font-size: 13px;
            vertical-align: top;
        }
        .info-table tr:last-child td {
            border-bottom: none;
        }
        .info-table td:first-child {
            font-weight: 700;
            white-space: nowrap;
            width: 140px;
            color: var(--text-main);
        }
        .info-table td:last-child {
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* FAQ */
        .faq-item {
            padding: 20px 24px;
            border-bottom: 1px solid var(--border-100);
        }
        .faq-item:last-child {
            border-bottom: none;
        }
        .faq-item h4 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-main);
        }
        .faq-item p {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* CTA */
        .help-cta {
            text-align: center;
            padding: 40px 20px;
            background: var(--bg-surface);
            border: 1px solid var(--border-100);
            border-radius: var(--radius-lg);
            margin-bottom: 32px;
        }
        .help-cta h2 {
            font-size: 22px;
            margin-bottom: 8px;
        }
        .help-cta p {
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .help-hero h1 { font-size: 24px; }
            .steps-grid { grid-template-columns: 1fr 1fr; }
            .info-table td:first-child { width: auto; }
        }
        @media (max-width: 480px) {
            .steps-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="page-wrapper">

    <!-- Navbar -->
    <nav class="navbar">
        <a href="<?php echo url('/index.php'); ?>" class="navbar-brand">
            Flash<span class="accent">Fix</span>
            <span class="sub">Support</span>
        </a>
        <div class="navbar-actions">
            <?php if (isCustomerLoggedIn()): ?>
                <a href="<?php echo url('/dashboard.php'); ?>" class="btn btn-secondary btn-sm">← My Tickets</a>
                <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary btn-sm">+ New Ticket</a>
            <?php else: ?>
                <a href="<?php echo url('/index.php'); ?>" class="btn btn-primary btn-sm">Sign In</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="main-content">
        <div class="container" style="max-width:900px;">

            <!-- Hero -->
            <div class="help-hero fade-in-up">
                <h1>How the Support Portal Works</h1>
                <p>Submit and track your IT support requests easily — no password needed. Here's everything you need to know.</p>
            </div>

            <!-- Steps -->
            <div class="steps-grid fade-in-up">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Enter Your Email</h3>
                    <p>Visit the portal and enter your email address. No registration or password required.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Check Your Inbox</h3>
                    <p>You'll receive a secure magic link. Click it to instantly access your dashboard.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Submit a Ticket</h3>
                    <p>Describe your issue with a subject, category, priority, and detailed description.</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Track & Reply</h3>
                    <p>Monitor your ticket status in real-time and reply directly from your dashboard.</p>
                </div>
            </div>

            <!-- Priority Levels -->
            <div class="help-section fade-in-up">
                <div class="help-section-title">
                    <div class="icon" style="background:rgba(245,158,11,0.15);color:var(--warning);">⚡</div>
                    Priority Levels
                </div>
                <div class="card">
                    <table class="info-table">
                        <tr>
                            <td><span class="badge priority-low">Low</span></td>
                            <td>General questions, minor issues, or feature requests with no urgency.</td>
                        </tr>
                        <tr>
                            <td><span class="badge priority-medium">Medium</span></td>
                            <td>Standard issues affecting your daily work that need attention.</td>
                        </tr>
                        <tr>
                            <td><span class="badge priority-high">High</span></td>
                            <td>Important problems impacting business operations or productivity.</td>
                        </tr>
                        <tr>
                            <td><span class="badge priority-critical">Critical</span></td>
                            <td>System down, security breach, or complete outage requiring immediate action.</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Ticket Status -->
            <div class="help-section fade-in-up">
                <div class="help-section-title">
                    <div class="icon" style="background:rgba(59,130,246,0.15);color:var(--primary-light);">📊</div>
                    Ticket Status Guide
                </div>
                <div class="card">
                    <table class="info-table">
                        <tr>
                            <td><span class="badge badge-open">Open</span></td>
                            <td>Your ticket has been received and is awaiting review by our team.</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-progress">In Progress</span></td>
                            <td>A technician is actively working on resolving your issue.</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-waiting">Waiting</span></td>
                            <td>We need more information from you. Please check and reply to your ticket.</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-resolved">Resolved</span></td>
                            <td>Your issue has been resolved. Let us know if you need anything else.</td>
                        </tr>
                        <tr>
                            <td><span class="badge badge-closed">Closed</span></td>
                            <td>The ticket is closed. You can always open a new ticket if needed.</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Support Categories -->
            <div class="help-section fade-in-up">
                <div class="help-section-title">
                    <div class="icon" style="background:rgba(16,185,129,0.15);color:var(--success);">🏷️</div>
                    Support Categories
                </div>
                <div class="card">
                    <table class="info-table">
                        <tr><td>IT Support</td><td>General IT assistance, account issues, troubleshooting</td></tr>
                        <tr><td>Network</td><td>Connectivity, Wi-Fi, VPN, and internet-related issues</td></tr>
                        <tr><td>Security</td><td>Suspicious activity, access concerns, data protection</td></tr>
                        <tr><td>Cloud</td><td>Cloud services, email hosting, online storage</td></tr>
                        <tr><td>Hardware</td><td>Printers, computers, peripherals, physical equipment</td></tr>
                        <tr><td>Software</td><td>Application errors, installations, updates, licensing</td></tr>
                        <tr><td>Other</td><td>Anything not covered by the categories above</td></tr>
                    </table>
                </div>
            </div>

            <!-- Email Notifications -->
            <div class="help-section fade-in-up">
                <div class="help-section-title">
                    <div class="icon" style="background:rgba(139,92,246,0.15);color:var(--info);">📧</div>
                    Email Notifications
                </div>
                <div class="card">
                    <table class="info-table">
                        <tr><td>Ticket Created</td><td>Confirmation email with your unique Case ID (e.g., FF-A3B2C1) sent immediately after submission.</td></tr>
                        <tr><td>New Reply</td><td>You'll be notified via email whenever our support team responds to your ticket.</td></tr>
                        <tr><td>Status Change</td><td>Get an email whenever your ticket status is updated (e.g., from Open to In Progress).</td></tr>
                    </table>
                </div>
            </div>

            <!-- FAQ -->
            <div class="help-section fade-in-up">
                <div class="help-section-title">
                    <div class="icon" style="background:rgba(6,182,212,0.15);color:var(--accent);">❓</div>
                    Frequently Asked Questions
                </div>
                <div class="card">
                    <div class="faq-item">
                        <h4>Do I need to create an account?</h4>
                        <p>No. Just enter your email address and we'll send you a secure login link. It's that simple — no passwords to remember.</p>
                    </div>
                    <div class="faq-item">
                        <h4>How long is the login link valid?</h4>
                        <p>The magic link expires in <?php echo TOKEN_EXPIRY_MINUTES; ?> minutes. If it expires, simply request a new one from the login page.</p>
                    </div>
                    <div class="faq-item">
                        <h4>Can I track multiple tickets?</h4>
                        <p>Yes. Your dashboard shows all your tickets with real-time status updates, priority levels, and timestamps.</p>
                    </div>
                    <div class="faq-item">
                        <h4>How do I reply to a ticket?</h4>
                        <p>Click on any ticket from your dashboard to open it, then type your message in the reply box and click Send.</p>
                    </div>
                    <div class="faq-item">
                        <h4>What file types can I upload?</h4>
                        <p>You can attach images (JPG, PNG, GIF), documents (PDF, DOC, DOCX, XLS, XLSX, TXT), and ZIP archives. Maximum file size is 10MB.</p>
                    </div>
                    <div class="faq-item">
                        <h4>I didn't receive the login email. What should I do?</h4>
                        <p>Check your spam/junk folder. If it's not there, try again with the correct email address. If the issue persists, contact us directly.</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="help-cta fade-in-up">
                <h2>Ready to Get Support?</h2>
                <p>Our team is here to help. Submit a ticket and we'll get back to you as soon as possible.</p>
                <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                    <?php if (isCustomerLoggedIn()): ?>
                        <a href="<?php echo url('/new-ticket.php'); ?>" class="btn btn-primary">Create New Ticket</a>
                        <a href="<?php echo url('/dashboard.php'); ?>" class="btn btn-secondary">View My Tickets</a>
                    <?php else: ?>
                        <a href="<?php echo url('/index.php'); ?>" class="btn btn-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Sign In to Get Started
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Contact Info -->
            <div style="text-align:center;margin-bottom:32px;padding:24px;" class="fade-in-up">
                <p style="font-size:13px;color:var(--text-soft);margin-bottom:6px;">Still need help? Reach us directly</p>
                <p style="font-size:14px;color:var(--text-muted);">
                    <a href="mailto:<?php echo ADMIN_EMAIL; ?>" style="color:var(--primary-light);font-weight:600;"><?php echo ADMIN_EMAIL; ?></a>
                    &nbsp;·&nbsp;
                    <a href="<?php echo MAIN_SITE_URL; ?>" style="color:var(--primary-light);font-weight:600;" target="_blank"><?php echo str_replace(['https://', 'http://'], '', MAIN_SITE_URL); ?></a>
                </p>
            </div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?> · Part of Hiba Computer Group · <a href="<?php echo MAIN_SITE_URL; ?>">Visit Main Website</a></p>
    </footer>

</div>
</body>
</html>
