<!-- 
    $(function() {
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });  
  });
<script>
      var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2
    });
</script>
-->
<?php
    #Błedy
    if(@$_GET['error'] == 1)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Błąd',
                    body: 'Wpierw spłać poprzednią pożyczke.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 2)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Błąd',
                    body: 'Brak wystarczających środków na koncie.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 3)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Błąd',
                    body: 'Brak wystarczających środków na koncie.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 5)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Błąd',
                    body: 'Błędny login lub hasło.'
                })
            </script>
        <?php
    }
    #Informacje
    if(@$_GET['error'] == 11)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Sukces',
                    body: 'Pomyślnie wzięto pożyczke.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 12)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Sukces',
                    body: 'Spłacono rate kredytu.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 13)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Sukces',
                    body: 'Pomyślnie wysłano pieniądze.'
                })
            </script>
        <?php
    }
    if(@$_GET['error'] == 14)
    {
        ?>
            <script>
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Sukces',
                    body: 'Pomyślnie wysłano treść wiadomości.'
                })
            </script>
        <?php
    }
?>