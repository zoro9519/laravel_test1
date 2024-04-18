<template>
    <div class="flex flex-row p-4">
        <div class="w-[30%] p-8 min-w-[250px] flex flex-col gap-4">
            <fieldset>
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input
                        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                        placeholder="Search for anything..." type="text" id="searchtext" name="searchtext" />
                </label>
            </fieldset>
            <fieldset class="mt-4 flex flex-col gap-2">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                    option</label>
                <div class="flex flex-row items-center gap-2">
                    <input id="facebook" class="peer/draft w-4 h-4" type="checkbox" />
                    <img class="w-[20px] rounded-full" src="/img/facebook.png" alt="facebook" />
                    <label for="facebook" class="peer-checked/draft:text-sky-500">Facebook</label>
                </div>
                <div class="flex flex-row items-center gap-2">
                    <input id="twitter" class="peer/draft w-4 h-4" type="checkbox" />
                    <img class="w-[20px] rounded-full" src="/img/twitter.png" alt="twitter" />
                    <label for="twitter" class="peer-checked/draft:text-sky-500">Twitter</label>
                </div>
                <div class="flex flex-row items-center gap-2">
                    <input id="tiktok" class="peer/draft w-4 h-4" type="checkbox" />
                    <img class="w-[20px] rounded-full" src="/img/tiktok.png" alt="tiktok" />
                    <label for="tiktok" class="peer-checked/draft:text-sky-500">Tiktok</label>
                </div>
                <div class="flex flex-row items-center gap-2">
                    <input id="linkedin" class="peer/draft w-4 h-4" type="checkbox" />
                    <img class="w-[20px] rounded-full" src="/img/linkedin.png" alt="linkedin" />
                    <label for="linkedin" class="peer-checked/draft:text-sky-500">linkedin</label>
                </div>
            </fieldset>
            <fieldset class="mt-4 flex flex-col gap-2">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select start and
                    end date</label>
                <div date-rangepicker class="flex flex-col items-center">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="start" type="date" id="startDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date start">
                    </div>
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="end" type="date" id="endDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date end">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <label for="userlists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select user
                    list</label>
                <select id="userlists"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="0">Choose a user list</option>
                    <option v-for="list in userLists" :value="list.name">{{ list.name }}</option>
                </select>
            </fieldset>
            <button class="bg-sky-500 text-white py-2 hover:bg-sky-700 active:bg-sky-400" @click="search">
                Search
            </button>
        </div>
        <div class="flex flex-wrap p-4 w-[70%]">

            <div v-for="post in posts" :key="post.id" class="w-full md:w-1/2 lg:w-1/3">
                <div class="p-4 h-full">
                    <div class="rounded overflow-hidden shadow-lg h-full">
                        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4]">
                            <div class="font-bold text-xl mb-2">
                                <a :href="post.social_link" target="_blank">{{ post.title }}</a>
                            </div>
                            <p class="text-gray-700 text-base overflow-hidden max-h-[140px]">
                                {{ post.content }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2 flex flex-row justify-between text-[#8d8888]">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-[20px] rounded-full" :src="'/img/' + post.social + '.png'"
                                    :alt="post.social" />
                                @{{ post.owner.name }}
                            </div>
                            <div>{{ creationDate(post.created_at) }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display error message -->
            <p v-if="error">{{ error }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';

export default {
    data() {
        return {
            posts: [],
            error: null,
            userLists: [],
        }
    },
    created() {
        axios.get('api/get-all-posts')
            .then(response => {
                this.posts = response.data
            })
            .catch(error => {
                this.error = "Error occurred: " + error
            })

        axios.get('api/get-user-lists')
            .then(response => {
                this.userLists = response.data
            })
            .catch(error => {
                this.error = "Error occurred: " + error
            })
    },
    methods: {
        creationDate(date) {
            const formattedDate = moment(date).fromNow();
            return formattedDate.charAt(0).toUpperCase() + formattedDate.slice(1);
        },
        search() {
            let formData = {};

            const searchText = document.getElementById('searchtext');
            const facebookCheckbox = document.getElementById('facebook');
            const twitterCheckbox = document.getElementById('twitter');
            const tiktokCheckbox = document.getElementById('tiktok');
            const linkedinCheckbox = document.getElementById('linkedin');
            const startDate = document.getElementById('startDate');
            const endDate = document.getElementById('endDate');
            const userList = document.getElementById('userlists');

            formData.searchText = searchText.value;
            formData.facebook = facebookCheckbox.checked;
            formData.twitter = twitterCheckbox.checked;
            formData.tiktok = tiktokCheckbox.checked;
            formData.linkedin = linkedinCheckbox.checked;
            formData.startDate = startDate.value;
            formData.endDate = endDate.value;
            formData.userList = userList.value;

            // const formDataJson = JSON.stringify(formData);
            // console.log(formDataJson)

            axios.get('/api/search', {
                params: formData,
            })
                .then(response => {
                    console.log(response)
                    this.posts = response.data
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
}
</script>