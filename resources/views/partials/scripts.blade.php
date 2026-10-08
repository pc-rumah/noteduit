    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        const transactionType = document.getElementById('transactionType');
        const destinationWalletGroup = document.getElementById('destinationWallet');
        const destinationWalletWrapper = document.getElementById('destinationWalletGroup');

        transactionType.addEventListener('change', function() {
            if (this.value === 'transfer') {
                destinationWalletWrapper.style.display = 'block';
                destinationWalletGroup.required = true;
            } else {
                destinationWalletWrapper.style.display = 'none';
                destinationWalletGroup.required = false;
                destinationWalletGroup.value = '';
            }
        });
    </script>
