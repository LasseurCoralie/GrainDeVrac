import React from 'react';

// == Styled
import PlanningTitleStyled from './PlanningTitleStyled';

const PlanningTitle = ({ week, startingDate, endingDate }) => {
  return (
    <PlanningTitleStyled>
      <h3 className="section-title">{week} du {startingDate} au {endingDate}</h3>
    </PlanningTitleStyled>
  );
};

export default PlanningTitle;