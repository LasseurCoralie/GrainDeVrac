import React from 'react';

// == Components
import PageTitle from '../../small_components/PageTitle/PageTitle';
import Planning from '../../small_components/Planning/Planning';
import PlanningTitle from '../../small_components/PlanningTitle/PlanningTitle';

// == Style

const Plannings = () => {
  return (
    <div>
      <PageTitle title="Planning des marchés et des livraisons" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dignissimos optio ducimus consequatur animi ab." />
      <section id="currentWeek">
        <PlanningTitle  week="Semaine en cours" startingDate="14/07" endingDate="21/07" />
        <Planning />
      </section>
      <section class="next-week">
        <PlanningTitle week="Semaine" startingDate="22/07" endingDate="29/07"/>
        <Planning />
      </section>
      <section class="next-week">
        <PlanningTitle week="Semaine" startingDate="30/07" endingDate="05/08"/>
        <Planning />
      </section>
      <section class="next-week">
        <PlanningTitle week="Semaine" startingDate="06/08" endingDate="13/08"/>
        <Planning />
      </section>
      
    </div>
  );
};

export default Plannings;