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

    const registerRoleInput = document.querySelector('#register-account-type');
    const registerRoleTabs = document.querySelectorAll('[data-register-role]');

    const selectRegisterRole = (role) => {
        if (!registerRoleInput) return;
        registerRoleInput.value = role;
        registerRoleTabs.forEach((tab) => {
            const active = tab.dataset.registerRole === role;
            tab.classList.toggle('is-active', active);
            tab.setAttribute('aria-selected', String(active));
        });
    };

    registerRoleTabs.forEach((tab) => {
        tab.addEventListener('click', () => selectRegisterRole(tab.dataset.registerRole));
    });
    selectRegisterRole(registerRoleInput?.value || 'parent');

    document.querySelectorAll('.password-toggle').forEach((passwordToggle) => {
        const passwordInput = document.querySelector(`#${passwordToggle.dataset.target || 'password'}`);
        if (!passwordInput) return;

        passwordToggle.addEventListener('click', () => {
            const showPassword = passwordInput.type === 'password';
            passwordInput.type = showPassword ? 'text' : 'password';
            passwordToggle.classList.toggle('is-visible', showPassword);
            passwordToggle.setAttribute('aria-pressed', String(showPassword));
            passwordToggle.setAttribute('aria-label', showPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
        });
    });

    const demoNote = document.querySelector('.demo-note');
    document.querySelectorAll('.demo-action').forEach((button) => {
        button.addEventListener('click', () => {
            if (!demoNote) return;
            demoNote.textContent = 'Fitur ini akan tersedia pada tahap pengembangan berikutnya.';
        });
    });

    document.querySelectorAll('[data-admin-sidebar-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            document.body.classList.toggle('admin-sidebar-open');
        });
    });
});
