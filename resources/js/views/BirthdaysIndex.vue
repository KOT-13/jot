<template>
    <ContactsList endpoint="/api/birthdays" />
</template>

<script>
    import ContactsList from '../components/ContactsList';

    export default {
        name: "contacts-index",

        components: {
            ContactsList
        }
    }
</script>

<style scoped>

</style>