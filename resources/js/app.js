document.addEventListener('DOMContentLoaded', () => {
    const roleInput = document.querySelector('#selected-role');
    const roleTabs = document.querySelectorAll('.role-tab');

    const selectRole = (role) => {
        if (!roleInput) return;
        roleInput.value = role;
        roleTabs.forEach((tab) => {
            const active = tab.dataset.role === role;
            tab.classList.toggle('is-active', active);
            tab.setAttribute('aria-selected', String(active));
        });
    };

    roleTabs.forEach((tab) => {
        tab.addEventListener('click', () => selectRole(tab.dataset.role));
    });
    selectRole(roleInput?.value || 'parent');

    const passwordInput = document.querySelector('#password');
    const passwordToggle = document.querySelector('.password-toggle');
    passwordToggle?.addEventListener('click', () => {
        const showPassword = passwordInput.type === 'password';
        passwordInput.type = showPassword ? 'text' : 'password';
        passwordToggle.classList.toggle('is-visible', showPassword);
        passwordToggle.setAttribute('aria-pressed', String(showPassword));
        passwordToggle.setAttribute('aria-label', showPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    });

    const demoNote = document.querySelector('.demo-note');
    document.querySelectorAll('.demo-action').forEach((button) => {
        button.addEventListener('click', () => {
            if (!demoNote) return;
            demoNote.textContent = 'Fitur ini akan tersedia pada tahap pengembangan berikutnya.';
        });
    });
});
