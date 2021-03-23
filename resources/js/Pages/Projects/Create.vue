<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Créer un projet
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="">
                        <h2>Responsable projet</h2>
                        <p>Ces informations serviront à savoir qui dirige le projet du coté du client</p>
                        <label for="client">Client</label>
                        <select name="client"  >
                            <option v-for="client in clients" :key="client.id"  :value='client.manager_name'> heelo </option>
                        </select>
                        <br><br>
                        <label for="name">Nom</label>
                        <input type="text" name="name">
                        <br><br>
                        <label for="surname">Prénom</label>
                        <input type="text" name="surname">
                        <br><br>
                        <label for="phone" placeholder="++33 (0)660 72 55 02">Téléphone</label>
                        <input type="tel" name="phone" pattern="[0-9]{4} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                        <br><br>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <br><br>
                        <h2>Information projet</h2>
                        <p>Use a permanent address where you can receive mail.</p>
                        <label for="title">Titre</label>
                        <input type="text" name="title">
                        <br><br>
                        <label for="description">Description</label>
                        <textarea name="description" rows="5" cols="33"></textarea>
                        <br><br>
                        <label for="start_at">Début du projet</label>
                        <input type="date" name="start_at">
                        <br><br>
                        <label for="end_at">Fin du projet estimé</label>
                        <input type="date" name="end_at">
                        <br><br>
                        <label for="status">Status du projet</label>
                        <select name="status">
                            <option value="DONE">DONE</option>
                            <option value="CURRENT">CURRENT</option>
                            <option value="CANCEL">CANCEL</option>
                        </select>
                        <br><br>
                        <label for="days_sold">Nombre de jours vendus</label>
                        <input type="number" name="days_sold">
                        <br><br>
                        <button>Anuller</button>
                        <button type="submit">Sauvegarder</button>

                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    export default {
        props: ['clients'],
        components: {
            AppLayout,
        },
    }
</script>
