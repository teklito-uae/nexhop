/**
 * FlashFix Support Ticket Platform - Frontend JS
 */

// ── Theme Toggle ──────────────────────────
(function() {
    // Apply saved theme immediately (before DOM ready to prevent flash)
    var saved = localStorage.getItem('support-theme');
    if (saved === 'light') {
        document.documentElement.setAttribute('data-theme', 'light');
    }
})();

function toggleTheme() {
    var html = document.documentElement;
    if (html.getAttribute('data-theme') === 'light') {
        html.removeAttribute('data-theme');
        localStorage.setItem('support-theme', 'dark');
    } else {
        html.setAttribute('data-theme', 'light');
        localStorage.setItem('support-theme', 'light');
    }
}

// ── Toast Auto-dismiss ────────────────────
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('flash-toast');
    if (toast) {
        setTimeout(() => {
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 400);
        }, 4500);
    }
});

// ── Mobile Sidebar Toggle ─────────────────
function toggleSidebar() {
    const sidebar = document.querySelector('.admin-sidebar');
    const overlay = document.querySelector('.sidebar-overlay');
    if (sidebar) {
        sidebar.classList.toggle('open');
        if (overlay) overlay.classList.toggle('open');
    }
}

// Close sidebar on overlay click
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('sidebar-overlay')) {
        toggleSidebar();
    }
});

// ── Character Counter ─────────────────────
function initCharCounter(textareaId, counterId, maxLen) {
    const textarea = document.getElementById(textareaId);
    const counter = document.getElementById(counterId);
    if (textarea && counter) {
        textarea.addEventListener('input', function() {
            const remaining = maxLen - this.value.length;
            counter.textContent = remaining + ' characters remaining';
            counter.style.color = remaining < 50 ? '#EF4444' : '#64748B';
        });
    }
}

// ── Form Validation Visual ────────────────
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            let valid = true;
            const required = form.querySelectorAll('[required]');
            required.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#EF4444';
                    field.style.boxShadow = '0 0 0 3px rgba(239,68,68,0.15)';
                    valid = false;
                } else {
                    field.style.borderColor = '';
                    field.style.boxShadow = '';
                }
            });
            if (!valid) {
                e.preventDefault();
                const first = form.querySelector('[required]:invalid, [required][style*="border-color"]');
                if (first) first.focus();
            }
        });
    });
});

// ── Confirm Dialog ────────────────────────
function confirmAction(message, url) {
    if (confirm(message)) {
        window.location.href = url;
    }
}

// ── Auto-resize Textarea ──────────────────
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('textarea.auto-resize').forEach(el => {
        el.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    });
});
