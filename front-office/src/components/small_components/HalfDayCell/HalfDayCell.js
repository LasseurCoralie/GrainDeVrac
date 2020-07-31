import React from 'react';

const HalfDayCell = ({ city, startHour, endHour, method }) => {  
  const showProgram = () => {
    switch (method) {
      case 'market':
        return <td><strong className="market-place">{city}</strong> <br/> {startHour} à {endHour}</td>;
      default:
        return <td className="delivery">Livraison</td>;
    }
  };

  return (
        showProgram()
  );
};

export default HalfDayCell;