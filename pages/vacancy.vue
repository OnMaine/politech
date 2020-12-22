<template>
  <div>
    <VacancySection />
    <Requirement />
    <FormSection />
  </div>
</template>

<script>
import VacancySection from '@/components/VacancySection'
import Requirement from '@/components/Requirement'
import FormSection from '@/components/FormSection'


export default {
  components: {
    VacancySection,
    Requirement,
    FormSection,
  }
};
</script>

<style>
</style>
