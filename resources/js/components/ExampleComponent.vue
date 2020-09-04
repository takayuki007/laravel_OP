<template>
    <!--STEP全体始まり-->
    <a :href="`${memoShow}`" class="c-index">
        <p class="c-text">{{ memo }}</p>
    </a>
    <!--STEP全体終わり-->
</template>

<script>
export default {
    props:['memo','memoShow'],
    data: function(){
        return{
        }
    },
}
</script>
