<x-layout>
    <x-page-heading>Login</x-page-heading>
    <x-forms.form method="POST" action="/login" >
        <x-forms.input label="Yor E-mail" name="email" type="email"></x-forms.input>
        <x-forms.input label="Yor Password" name="password" type="password"></x-forms.input>
        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
