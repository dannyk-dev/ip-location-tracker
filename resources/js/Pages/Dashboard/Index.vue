<template>
  <div>
    <Head title="Locations" />
    <h1 class="mb-8 text-3xl font-bold">Locations</h1>
    <div class="flex items-center justify-between mb-6">
      <!-- <search-filter v-model="form.search" class="mr-4 w-full max-w-md" @reset="reset">
        <label class="block text-gray-700">Trashed:</label>
        <select v-model="form.trashed" class="form-select mt-1 w-full">
          <option :value="null" />
          <option value="with">With Trashed</option>
          <option value="only">Only Trashed</option>
        </select>
      </search-filter> -->
      <!-- <Link class="btn-indigo" href="/organizations/create">
        <span>Create</span>
        <span class="hidden md:inline">&nbsp;Organization</span>
      </Link> -->
    </div>
    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-left font-bold">
            <th class="pb-4 pt-6 px-6">Country / Area Code</th>
            <th class="pb-4 pt-6 px-6">City</th>
            <th class="pb-4 pt-6 px-6">IP</th>
            <th class="pb-4 pt-6 px-6" colspan="2">
              Latitude / Longitude
            </th>
            <th class="pb-4 pt-6 px-6">
              Timezone
            </th>
            <th class="pb-4 pt-6 px-6" colspan="2">
              Google Link
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="location in locations.data" :key="location.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border-t">
              <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/locations/${location.id}`">
                {{location.countryCode  }} / {{ location.areaCode }}
                <!-- <icon v-if="organization.deleted_at" name="trash" class="shrink-0 ml-2 w-3 h-3 fill-gray-400" /> -->
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4" :href="`/locations/${location.id}`" tabindex="-1">
                {{ location.cityName }}
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4" :href="`/locations/${location.id}`" tabindex="-1">
                {{ location.ip }}
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4" :href="`/locations/${location.id}`" tabindex="-1">
                {{ location.latitude }} / {{location.longitude  }}
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4" :href="`/locations/${location.id}`" tabindex="-1">
                {{location.timezone  }}
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4" :href="`/locations/${location.id}`" tabindex="-1">
                Nothing yet
              </Link>
            </td>
            <td class="w-px border-t">

              <Link class="flex items-center px-4" :href="`/locations/${location.id}/edit`" tabindex="-1">
                <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
              </Link>
            </td>
          </tr>
          <tr v-if="locations.data.length === 0">
            <td class="px-6 py-4 border-t" colspan="4">No organizations found.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3'
import Icon from '@/Shared/Icon.vue'
import pickBy from 'lodash/pickBy'
import Layout from '@/Shared/Layout.vue'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination.vue'
import SearchFilter from '@/Shared/SearchFilter.vue'

export default {
  components: {
    Head,
    Icon,
    Link,
    Pagination,
    SearchFilter,
  },
  layout: Layout,
  props: {
    locations: Object,
  },
  mounted() {
    console.log(this.locations)
  },
  methods: {
    // reset() {
    //   this.form = mapValues(this.form, () => null)
    // },
  },
}
</script>
