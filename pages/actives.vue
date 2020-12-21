<template>
  <div>
    <ActivesSection/>
    <ActivesCard/>
    <Garants/>
    <RedText/>
    <Strategy/>
    <FormSection />
  </div>
</template>

<script>
import ActivesSection from '@/components/ActivesSection'
import ActivesCard from '@/components/ActivesCard'
import Garants from '@/components/Garants'
import RedText from '@/components/RedText'
import Strategy from '@/components/Strategy'
import FormSection from '@/components/FormSection'

export default {
  components: {
    ActivesSection,
    ActivesCard,
    Garants,
    RedText,
    Strategy,
    FormSection,
  }
};
</script>

<style>
</style>
