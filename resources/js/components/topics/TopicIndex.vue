<template>
  <div class="px-3 py-5">
    <div class="col-12">
      <div class="pb-3 text-center">
        <h1 class="font-weight-bold">Telusuri Semua Topik di PortalSoloRaya</h1>
        <ul class="nav nav-foot pt-3 justify-content-center">
          <li class="nav-item" v-for="topics in topics" v-bind:key="topics.id">
            <a class="nav-link" href="#">{{topics.name}}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</template>

<script>
    export default {
        data() {
            return {
                topics: [],
                pagination: {},
                topics: {
                    id: '',
                    name: ''
                },
                update: false,
            };
        },

        created() {
            this.getTopics();
        },

        methods: {
            getTopics(api_url) {
              let vm = this;
              api_url = api_url || '/api/topics';
              fetch(api_url)
                  .then(response => response.json())
                  .then(response => {
                      this.topics = response.data;
                      vm.paginator(response.meta,response.links);
                  })
                  .catch(err => console.log(err));
            },

            paginator(meta, links) {
                this.pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
            },
        }
    };
</script>
