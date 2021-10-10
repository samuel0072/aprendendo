var apiURL =
        "https://api.github.com/repos/{0}/commits?per_page={1}&sha={2}";

const app = Vue.createApp({
    data: function() { 
        return  {
            branches: ["main", "dev", "master"],
            currentBranch: "main",
            per_page: 3,
            link: "samuel0072/se_liga_hein",
            commits: null
        }
    },

    created: function() {
        this.fetchData();
    },

    watch: {
        currentBranch: "fetchData",
        per_page:"fetchData",
        link:"fetchData",
    },

    methods: {
        truncate: function(v) {
            var newline = v.indexOf("\n");
            return newline > 0 ? v.slice(0, newline) : v;
        },
        formatDate: function(v) {
            return v.replace(/T|Z/g, " ");
        },
        fetchData: function() {
            var xhr = new XMLHttpRequest();
            var self = this;
            url = apiURL.replace("{0}", self.link)
            .replace("{1}", self.per_page)
            .replace("{2}", self.currentBranch)
            xhr.open("GET", url);
            xhr.onload = function() {
                self.commits = JSON.parse(xhr.responseText);
                console.log(self.commits[0].html_url);
            };
            xhr.send();
        }
    }
})

app.mount('#demo')